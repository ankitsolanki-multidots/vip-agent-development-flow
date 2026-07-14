<?php
/**
 * Theme Functions.
 *
 * @package agent-flow
 */

if ( ! defined( 'AGENT_FLOW_THEME_VERSION' ) ) {
	define( 'AGENT_FLOW_THEME_VERSION', '1.0' );
}

if ( ! defined( 'AGENT_FLOW_THEME_PATH' ) ) {
	define( 'AGENT_FLOW_THEME_PATH', __DIR__ );
}

if ( ! defined( 'AGENT_FLOW_THEME_URL' ) ) {
	define( 'AGENT_FLOW_THEME_URL', get_template_directory_uri() );
}

if ( ! defined( 'AGENT_FLOW_BUILD_URI' ) ) {
	define( 'AGENT_FLOW_BUILD_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build' );
}

if ( ! defined( 'AGENT_FLOW_BUILD_PATH' ) ) {
	define( 'AGENT_FLOW_BUILD_PATH', untrailingslashit( get_template_directory() ) . '/assets/build' );
}

if ( ! defined( 'AGENT_FLOW_SRC_BLOCK_DIR_PATH' ) ) {
	define( 'AGENT_FLOW_SRC_BLOCK_DIR_PATH', get_template_directory() . '/assets/build/blocks' );
}

/**
 * Load up the class autoloader.
 */
require_once AGENT_FLOW_THEME_PATH . '/includes/helpers/autoloader.php';

/**
 * Theme Init
 *
 * Sets up the theme.
 *
 * @return void
 * @since 1.0.0
 */
function agent_flow_get_theme_instance() {
	\AGENT_FLOW\Includes\Agent_Flow::get_instance();
}

agent_flow_get_theme_instance();
