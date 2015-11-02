<?php

/*
	these lines register templates of WPLP PREMIUM
*/

function wplp_premium_templates() {
	wplp_register_template('premium2', 'Premium 2', '/' . plugin_basename( dirname(__FILE__) ) . '/../templates/premium2');
	wplp_register_template('premium1', 'Premium 1', '/' . plugin_basename( dirname(__FILE__) ) . '/../templates/premium1');
}

add_action('init', 'wplp_premium_templates');
