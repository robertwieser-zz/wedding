<?php

/**
 * Form object
 */
class Osfa_Form {

	/**
	 * Holds single class instance
	 * @access private
	 * @static
	 * @var null|Osfa_Form
	 */
	private static $instance = null;

	/**
	 * The validator object. If null, form submission has not been validated.
	 * @static
	 * @var null|Osfa_Form_Validator
	 */
	public static $validator = null;

	/**
	 * Form fields
	 * @var array
	 */
	protected $fields = array();

	/**
	 * Array of methods or functions to execute on success
	 * @var array
	 */
	protected $on_success = array();

	/**
	 * Create class instance
	 * @param array $fields
	 * @access private
	 */
	private function __construct( $fields = array() ) {
		if ( !class_exists('Osfa_Form_Validator') ) {
			require_once('validate.class.php');
		}

		$this->fields = $fields;
	}

	/**
	 * Get class instance
	 * @param array $fields
	 * @static
	 * @return Osfa_Form
	 */
	public static function get_instance( $fields = array() ) {
		if ( is_null( self::$instance ) ) {
			self::$instance = new Osfa_Form( $fields );
		}

		return self::$instance;
	}

	/**
	 * Validate the form submission
	 * @param null|Osfa_Form
	 * @return void
	 */
	public static function validate( $instance = null ) {
		if ( is_null( $instance ) ) {
			$instance = self::get_instance();
		}

		self::$validator = new Osfa_Form_Validator( $instance );
	}

	/**
	 * Return whether submitted values were valid
	 * @static
	 * @return bool
	 */
	public static function is_valid( $instance = null ) {
		if ( is_null( $instance ) ) {
			$instance = self::get_instance();
		}

		return self::$validator->is_valid();
	}

	/**
	 * Submit the form. Checks whether the form is valid before 
	 * either returning false or proceeding with the submission
	 * @static
	 * @return void
	 */
	public static function submit() {
		$instance = self::get_instance();

		// Check to see if form has already been validated. 
		// If not, validate it now.
		if ( is_null( self::$validator ) ) {
			self::validate( $instance );	
		}

		if ( self::is_valid( $instance ) === false ) {
			// Stop form submission right here
			return false;
		}
		else {
			// Do form submission stuff
			foreach ( $instance->on_success as $method ) {				
				call_user_func( $method['method'], $method['args'] );
			}
		}
	}

	/**
	 * Add a method to execute on form success
	 * @param string|array $method
	 * @param array $args
	 * @return void
	 */
	public function add_success_method( $method, $args = array() ) {
		self::get_instance()->on_success[] = array( 'method' => $method, 'args' => $args );
	}

	/** 
	 * Get form fields
	 * @return array
	 */
	public function get_form_fields() {
		return $this->fields;
	}

	/**
	 * Send email upon form submission
	 * @param array $args
	 * @return void
	 */
	public function send_email( array $args = array() ) {
		$reply_to = $args['reply_to'];
		$message = $args['message'];
		$subject = $args['subject'];
		$recipient = $args['recipient'];
		$headers = <<<PHP_EOD
From: $reply_to
Reply-To: $reply_to
MIME-Version: 1.0
Content-type: text/plain; charset=utf-8
Content-Transfer-Encoding: quoted-printable
PHP_EOD;

		// Send email 
		mail( $recipient, $subject, $message, $headers );
	}

	/** 
	 * Save session variable 
	 * @return void
	 */
	public function save_session() {
		$instance = self::get_instance();

		foreach ( array( 'osfa_form_status', 'osfa_form_validator' ) as $key ) {
			unset( $_SESSION[$key] );
		}

		if ( call_user_func( array( $instance, 'is_valid') ) ) {
			$_SESSION['osfa_form_status'] = 'success';
		}
		else {			
			$_SESSION['osfa_form_status'] = 'error';
			$_SESSION['osfa_form_validator'] = base64_encode( serialize( self::$validator ) );
		}
	}

	/** 
	 * Prints out a form status message
	 * @param null|string $key
	 * @param bool $echo
	 */
	public static function status_message( $key = null, $echo = true ) {
		if ( !isset( $_SESSION['osfa_form_status'] ) ) {
			return;
		}
		
		$instance = self::get_instance();

		$message = '';

		if ( is_null( $key ) ) {
			if ( $_SESSION['osfa_form_status'] == 'error' ) {
				$message = '<div class="message error form_message">'
					. '<p>There was a problem with your form submission.</p>'
					. '</div>';				
            }
            elseif ( $_SESSION['osfa_form_status'] == 'success' ) {
            	$message = '<div class="message success form_message">'
					. '<p>Thank you. Your message has been sent.</p>'
					. '</div>';
			}
		}
		elseif ( isset( $_SESSION['osfa_form_validator'] ) ) {
			if ( is_null( self::$validator ) ) {
				self::$validator = unserialize( base64_decode( $_SESSION['osfa_form_validator'] ) );
			}

			$error = call_user_func( self::$validator, 'get_error', $key );
			if ( $error === false ) {
				return;
			}

			$message = '<p class="message field_error error">'.$error.'</p>';
		}	

		if ( $echo === false ) {
			return $message;
		}

		unset( $_SESSION['osfa_form_status'] );
		unset( $_SESSION['osfa_form_validator'] );

		echo $message;
	}
}