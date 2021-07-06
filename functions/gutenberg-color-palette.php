<?php

// ===============================================
// ===============================================
// Disable Custom Colors

//add_theme_support( 'disable-custom-colors' );


// ===============================================
// ===============================================
// Custom Palette

add_theme_support( 'editor-color-palette', array(
	array(
		'name'  => __( 'Primary', 'ea_genesis_child' ),
		'slug'  => 'primary',
		'color'	=> '#008A90',

	),
	array(
		'name'  => __( 'Dark', 'ea_genesis_child' ),
		'slug'  => 'dark',
		'color' => '#181b1d',
	),
	array(
		'name'	=> __( 'Medium', 'ea_genesis_child' ),
		'slug'	=> 'medium',
		'color'	=> '#6a7177',
	),
	array(
		'name'  => __( 'Light', 'ea_genesis_child' ),
		'slug'  => 'light',
		'color' => '#9AC4D1',
	),
	array(
		'name'	=> __( 'White', 'ea_genesis_child' ),
		'slug'	=> 'white',
		'color'	=> '#fff',
	),
) );
