<?php 

class Osfa_Form_Validator {

	/**
	 * Errors
	 * @var array
	 */
	protected $errors = array();

	/** 
	 * Form object
	 * @var Osfa_Form
	 */
	protected $form;

	/** 
	 * Submitted form values
	 * @var array
	 */
	protected $submitted = array();

	/**
	 * Validate a submitted form
	 * @param Osfa_Form $form
	 */
	public function __construct( Osfa_Form $form ) {
		if ( isset( $_POST ) ) {
			$this->submitted = $_POST;
		}
		elseif ( isset( $_GET ) ) {
			$this->submitted = $_GET;
		}
		else {
			$this->add_error('no_submission', 'No submitted values were detected.');
			return;
		}

		$this->form = $form;
		$this->validate_fields();
	}

	/**
	 * Add an error in the submitted form
	 * @param string $error_code
	 * @param string $error_description
	 * @param string $field_name
	 */
	public function add_error($error_code, $error_description, $field_name = '') {
		if ( strlen( $field_name ) ) {
			$this->errors['fields'][$field_name][$error_code] = $error_description;
		}
		else {
			$this->errors[$error_code] = $error_description;
		}		
	}

	/**  
	 * Check whether errors have been set for field
	 * @param string $field_name
	 * @return bool
	 */
	public function has_errors( $field_name ) {
		if ( array_key_exists( 'fields', $this->errors ) 
			&& array_key_exists( $field_name, $this->errors['fields'] ) ) {
			return true;
		}
		return false;
	}

	/**  
	 * Get errors for field
	 * @param string $field_name
	 * @return array
	 */
	public function get_errors( $field_name ) {
		if ( $this->has_errors( $field_name ) === false ) {
			return false;
		}

		return $this->errors['fields'][$field_name];		
	}

	/**  
	 * Get error for field at specified index
	 * @param string $field_name
	 * @param int $index
	 * @return string
	 */
	public function get_error( $field_name, $index = 0 ) {
		$errors = $this->get_errors( $field_name );

		if ( $errors === false ) {
			return false;
		}

		$errors = array_values( $errors );
		return $errors[0];
	}	

	/**
	 * Returns whether the submitted form contains any errors
	 * @return bool
	 */
	public function is_valid() {
		return empty( $this->errors );
	}

	/**
	 * Validate form fields
	 * @return void
	 */
	protected function validate_fields() {		
		foreach ( $this->form->get_form_fields() as $field => $validators ) {
			if ( is_array( $validators ) ) {
				foreach ( $validators as $type => $error_message ) {
					switch ( $type ) {
						case 'is_required':
							if ( !array_key_exists( $field, $this->submitted ) 
								|| ( is_string( $this->submitted[$field] ) && strlen( trim( $this->submitted[$field] ) ) == 0 ) ) {
								$this->add_error( 'missing_required_field', $error_message, $field );
							}
							break;

						case 'validate_email': 
							if ( filter_var( $this->submitted[$field], FILTER_VALIDATE_EMAIL ) === false ) {
								$this->add_error( 'invalid_email', $error_message, $field );
							}
							break;
					}
				}
			}			
		}
	}
}