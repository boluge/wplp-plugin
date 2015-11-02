<?php

/*
	these lines register templates of WPLP PREMIUM
*/

function wplp_premium_templates() {
	wplp_register_template('premium2', 'Premium', '/' . plugin_basename( dirname(__FILE__) ) . '/../templates/premium2');
}

add_action('init', 'wplp_premium_templates');