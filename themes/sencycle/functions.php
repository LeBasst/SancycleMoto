<?php

register_nav_menus(array('Sancycle' => 'Navigation principale',
							'SocialNetwork' => 'Network'));

$args = array(
    'flex-width'    => true,
    'width'         => 1920,
    'flex-height'   => true,
    'height'        => 500,
    'default-image' => get_template_directory_uri() . '/images/header.jpg',
);
add_theme_support( 'custom-header', $args );
