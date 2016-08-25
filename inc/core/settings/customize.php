<?php

function simple_customize_register ($wp_customize) {
	/* Layout Settings */
	$wp_customize->add_section('layout', array(
		'title' => 'Theme Layout'
	));

	/** Posts Section Width **/
	$wp_customize->add_setting('loop_width', array(
		'default' => 'container',
		'transport' => 'refresh'
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'loop_width', array(
			'label' => 'Posts Section Width',
			'section' => 'layout',
			'settings' => 'loop_width',
			'type' => 'select',
			'choices' => array('container' => 'With Margin', 'container-fluid' => 'Full Width')
		)
	));

	/** Show Featured Posts **/
	$wp_customize->add_setting('featured_posts', array(
		'default' => true,
		'transport' => 'refresh'
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'featured_posts', array(
			'label' => 'Show Featured Posts',
			'section' => 'layout',
			'settings' => 'featured_posts',
			'type' => 'checkbox'
		)
	));

	/** Posts Layout Type **/
	$wp_customize->add_setting('loop_layout', array(
		'default' => 'normal',
		'transport' => 'refresh'
	));

	$wp_customize->add_control(new Wp_Customize_control($wp_customize, 'loop_layout', array(
			'label' => 'Post Section Layout',
			'section' => 'layout',
			'settings' => 'loop_layout',
			'type' => 'select',
			'choices' => array('normal' => 'Normal', 'masonry' => 'Masonry')
		)
	));

	/* Colors Settings */

	$wp_customize->add_section('colors', array(
		'title' => 'Theme Colors',
		'priority' => 30
	));

	$wp_customize->add_setting('main_color', array(
		'default' => '#f44336',
		'transport' => 'refresh'
	));

	$wp_customize->add_setting('accent_color', array(
		'default' => '#607d8b',
		'transport' => 'refresh'
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'main_color', array(
			'label' => 'Main Color',
			'section' => 'colors',
			'settings' => 'main_color'
		)
	));

	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'accent_color', array(
			'label' => 'Accent Color',
			'section' => 'colors',
			'settings' => 'accent_color'
		)
	));
}

add_action('customize_register', 'simple_customize_register');

?>
