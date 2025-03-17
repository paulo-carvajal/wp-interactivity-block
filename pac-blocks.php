<?php
/**
 * Plugin Name:       Pac Blocks
 * Description:       An interactive block with the Interactivity API.
 * Version:           0.1.0
 * Requires at least: 6.7
 * Requires PHP:      7.4
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       pac-blocks
 *
 * @package           create-block
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function create_block_pac_blocks_block_init() {
	$build_dir = __DIR__ . '/build';

	// Obtener todos los directorios dentro de /build/
	$block_directories = array_filter(glob($build_dir . '/*'), 'is_dir');

	// Registrar cada bloque encontrado
	foreach ($block_directories as $block_dir) {
		register_block_type_from_metadata($block_dir);
	}
}
add_action( 'init', 'create_block_pac_blocks_block_init' );


/**
 * Debug: Remove all but basic and my blocks
 */
function example_allowed_block_types($allowed_block_types, $block_editor_context)
{

    $allowed_block_types = array(
        'core/heading',
        'core/image',
        'core/list',
        'core/list-item',
        'core/paragraph',
        'pac-test/block01',
        'pac-test/block02',
        'pac-test/block03',
    );

    return $allowed_block_types;
}
add_filter('allowed_block_types_all', 'example_allowed_block_types', 10, 2);
