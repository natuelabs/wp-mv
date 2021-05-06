<?php

$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require_once( $parse_uri[0] . 'wp-load.php' );

$email = strtolower( $_POST['email'] );

if ( is_email( $email ) ) {

	$stack = get_option( 'subscribed_emails' );

	if (!$stack) {
		update_option( 'subscribed_emails', array( $email ) );
	} else {
		if ( in_array( $email, $stack ) ) {
			echo '<p class="vs-error">';
			esc_html_e( 'Whoops! This email address is already subscribed!', 'bloggn' );
			echo '</p>';

		} else {

			array_push( $stack, $email );
			update_option( 'subscribed_emails', $stack );

			$fp = fopen( 'subscribers.csv', 'w' );
			foreach($stack as $line) {
				$val = explode(",",$line);
				fputcsv($fp, $val);
			}
			fclose($fp);
			
			echo '<p class="vs-success">';
			esc_html_e( 'Thank you, your sign-up request was successful!', 'bloggn');
			echo '</p>';
		}
	}
}
else {
	echo '<p class="vs-error">';
	esc_html_e( 'Please provide a valid email address', 'bloggn' );
	echo '</p>';
}
