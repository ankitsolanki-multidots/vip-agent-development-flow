<?php
/**
 * Register Custom Taxonomies
 *
 * @package agent-flow
 */

namespace AGENT_FLOW\Includes;

use AGENT_FLOW\Includes\Traits\Singleton;

/**
 * Class for register taxonomies.
 */
class Register_Taxonomies {
	use Singleton;

	/**
	 * Construct method.
	 */
	protected function __construct() {

		// load class.
		$this->setup_hooks();
	}

	/**
	 * To register action/filter.
	 *
	 * @return void
	 * @since 1.0.0
	 */
	protected function setup_hooks() {

		/**
		 * Actions.
		 */
		add_action( 'init', array( $this, 'register_year_taxonomy' ) );
	}

	/**
	 * Register Taxonomy Year.
	 *
	 * @return void
	 * @since 1.0.0
	 */
	public function register_year_taxonomy() {

		$labels = array(
			'name'              => _x( 'Years', 'taxonomy general name', 'agent-flow' ),
			'singular_name'     => _x( 'Year', 'taxonomy singular name', 'agent-flow' ),
			'search_items'      => __( 'Search Years', 'agent-flow' ),
			'all_items'         => __( 'All Years', 'agent-flow' ),
			'parent_item'       => __( 'Parent Year', 'agent-flow' ),
			'parent_item_colon' => __( 'Parent Year:', 'agent-flow' ),
			'edit_item'         => __( 'Edit Year', 'agent-flow' ),
			'update_item'       => __( 'Update Year', 'agent-flow' ),
			'add_new_item'      => __( 'Add New Year', 'agent-flow' ),
			'new_item_name'     => __( 'New Year Name', 'agent-flow' ),
			'menu_name'         => __( 'Year', 'agent-flow' ),
		);
		$args   = array(
			'labels'             => $labels,
			'description'        => __( 'Movie Release Year', 'agent-flow' ),
			'hierarchical'       => false,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'show_in_nav_menus'  => true,
			'show_tagcloud'      => true,
			'show_in_quick_edit' => true,
			'show_admin_column'  => true,
			'show_in_rest'       => true,
		);
		register_taxonomy( 'movie-year', array( 'movies' ), $args );
	}
}
