<?php
/*
Plugin Name: Hrvatski otoci za WooCommerce (Croatian Islands for WooCommerce)
Plugin URI: https://github.com/markoidzan/woocommerce-hr-states/
Description: HR: Dodatak za WooCommerce kojime se dodaju Hrvatski otoci u listu dostupnih regija. EN: Adds Croatian Islands within WooCommerce Core Regions.
Version: 1.0
Author: Marko Idžan
Author URI: https://idzan.com.hr
*/

function hr_islands_skz_woo ($states) {

	$states['SKŽ'] = array(
							'KAPRIJE' => 'Kaprije' ,
							'KRAPANJ' => 'Krapanj' ,
							'MURTER' => 'Murter' ,
							'KAPRIJE' => 'Kaprije' ,
							);
	return $states;
}

add_filter ('woocommerce_states', 'hr_islands_skz_woo');