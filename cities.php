<?php
/**
 * Plugin Name: Cities Levels for WooCommerce
 * Plugin URI: https://www.instagram.com/adeshokan_bolaji/
 * Author: Adeshokan Bolaji Adedotun
 * Author URI: https://www.instagram.com/adeshokan_bolaji/
 * Description: This plugin adds states and cities for shipping zones in WooCommerce.
 * Version: 0.2.2
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: clw
 */

// Add Basic Plugin Security
defined('ABSPATH') or die;

// Define states with cities as an array
function kingz_clw_add_custom_states($states) {
    $states['NG'] = array(
        'PH' => 'Port Harcourt',
        'LG' => 'Lagos',
        'ABJ' => 'Abuja',
        'KN' => 'Kano',
        'EN' => 'Enugu',
    );

    return $states;
}
add_filter('woocommerce_states', 'kingz_clw_add_custom_states');

// Define cities for each state
function kingz_clw_add_custom_cities($cities) {
    $cities['NG'] = array(
        'PH' => array(
            'NEW GRA',
            'RUMUOLA',
            'RUMUOKUTA',
            'RUMUIGBO',
            'ORAZI',
            'MILE 4',
            'WIMPEY',
            'AGIP',
            'MILE 3',
            'ELEKAHIA',
            'GARRISON',
            'OGBUNABALI',
            'RUMUOKALABOR',
            'NTA ROAD',
            'HARMONY ESTATE',
            'AIRFORCE BASE',
            'BORI CAMP',
            'STADIUM ROAD',
            'OLD GRA',
            'ABULOMA',
            'ODILI ROAD',
            'TRANS AMADI',
            'SLAUGHTER',
            'RUMUOBIAKANI',
            'OKPORO ROAD',
            'ELIOZU',
            'RUMUOKORO',
            'TOWN',
            'RUKPOKWU',
            'ADA GEORGE',
            'IWOFE',
            'OZUOBA',
            'CHOBA',
            'WOJI',
            'ELENLEWO',
            'GOLF ESTATE',
            'BOROKIRI'
        ),
        'LG' => array(
            'Mainland',
            'Island'
        ),
        'ABJ' => array(
            'Central Area'
        ),
        'KN' => array(
            'Kano City'
        ),
        'EN' => array(
            'Enugu North'
        ),
    );

    return $cities;
}
add_filter('woocommerce_cities', 'kingz_clw_add_custom_cities');
