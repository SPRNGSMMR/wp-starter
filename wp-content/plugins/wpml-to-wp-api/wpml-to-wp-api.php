<?php
/*
Plugin Name: WPML to WP API
Plugin URI: http://y-designs.com/
Description: A simple wordpress plugin that makes WP API return the right language stuff.
Version: 0.1
Author: Ryuhei Yokokawa
Author URI: http://y-designs.com
License: GPL
*/


//Figured out a way to make WPAPI work with WPML.  Just gotta modify the stupid query beforehand.
function wpml_json_api_init( $server ) {
	global $sitepress;
	$default = $sitepress->get_default_language();//get the default language.
	$langs = array_keys(icl_get_languages('skip_missing=0&orderby=KEY&order=DIR&link_empty_to=str'));//Get all available langauges (only the keys, en,ja,fr, etc).

	//Get the set lang variable.  set default against it if it doesn't exist.
	$cur_lang = get_query_var('lang', $default );

	//See if the current langauge is NOT part of the available langauges.
	if( !in_array($cur_lang, $langs ) ) {
		$cur_lang = $default;//If not, set it against the default.
	}
	//finally, set the language to modify the WP-API query.
	$sitepress->switch_lang( $cur_lang );
}

//make the WPML query change happen before WP API runs the query.
add_action( 'wp_json_server_before_serve', 'wpml_json_api_init' );