<?php
/**
 * SPDX-FileCopyrightText: 2026 Eric van der Vlist <vdv@dyomedea.com>
 * SPDX-License-Identifier: GPL-3.0-or-later
 *
 * Wikiguise: the stylesheet of the layout and of the classes printed by the plugin Otherguise.
 *
 * @package Wikiguise
 */

defined( 'ABSPATH' ) || exit;

/**
 * Loads the stylesheet on the front end and in the editor. Action `after_setup_theme`.
 *
 * @return void
 */
function wikiguise_setup() {
	add_theme_support( 'editor-styles' );
	add_editor_style( 'assets/css/wiki.css' );
}
add_action( 'after_setup_theme', 'wikiguise_setup' );

/**
 * Enqueues the stylesheet of the front end. Action `wp_enqueue_scripts`.
 *
 * @return void
 */
function wikiguise_enqueue() {
	wp_enqueue_style(
		'wikiguise',
		get_theme_file_uri( 'assets/css/wiki.css' ),
		array(),
		(string) filemtime( get_theme_file_path( 'assets/css/wiki.css' ) )
	);
}
add_action( 'wp_enqueue_scripts', 'wikiguise_enqueue' );
