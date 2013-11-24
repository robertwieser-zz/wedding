<?php
// If you haven't created a Twitter application yet, please go to 
// https://dev.twitter.com/apps and create a new application. 

// Set your Twitter application variables.

define( 'CONSUMER_KEY', 		'Constumer key' );
define( 'CONSUMER_SECRET', 		'Consumer secret' );
define( 'ACCESS_TOKEN', 		'Access token' );
define( 'ACCESS_TOKEN_SECRET', 	'Access token secret' );

/*/////////////////////////////////////////
	DO NOT EDIT PAST THIS POINT
	(unless you know what you're doing)
/////////////////////////////////////////*/

// Get request variables
$screen_name = 		isset( $_GET['screen_name'] ) 		? $_GET['screen_name'] 		: false;
$count = 			isset( $_GET['count'] ) 			? $_GET['count'] 			: 3;
$include_rts = 		isset( $_GET['include_rts'] ) 		? $_GET['include_rts'] 		: 1;
$exclude_replies = 	isset( $_GET['exclude_replies'] ) 	? $_GET['exclude_replies'] 	: 1;

// If a screen name hasn't been provided, show stops here.
if ( $screen_name === false ) {
	echo 'Unable to parse request. No screen name was provided.';
	die();
}

// Include the TwitterOAuth class
require_once('twitteroauth/twitteroauth.php');

// Create the TwitterOAuth object
$twitter = new TwitterOAuth( CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET );
$twitter->decode_json = false;

// Fetch the tweets
$tweets = $twitter->get('statuses/user_timeline', array( 
    'screen_name' => $screen_name, 
    'count' => $count, 
    'include_entities' => 1, 
    'include_rts' => $include_rts, 
    'exclude_replies' => $exclude_replies
) );

// Print the tweets out
header( 'content-type: application/json; charset=utf-8' );
echo 'fetch_tweets('.$tweets.');';

die();