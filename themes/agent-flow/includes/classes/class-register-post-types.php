<?php
/**
 * Register Post Types
 *
 * @package agent-flow
 */

namespace AGENT_FLOW\Includes;

use AGENT_FLOW\Includes\Traits\Singleton;

/**
 * Class for register post types.
 */
class Register_Post_Types {
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
		add_action( 'init', array( $this, 'register_movie_cpt' ), 0 );
	}

	/**
	 * Register Custom Post Type Movie.
	 *
	 * @return void
	 * @since 1.0.0
	 */
	public function register_movie_cpt() {

		$labels = array(
			'name'                  => _x( 'Movies', 'Post Type General Name', 'agent-flow' ),
			'singular_name'         => _x( 'Movie', 'Post Type Singular Name', 'agent-flow' ),
			'menu_name'             => _x( 'Movies', 'Admin Menu text', 'agent-flow' ),
			'name_admin_bar'        => _x( 'Movie', 'Add New on Toolbar', 'agent-flow' ),
			'archives'              => __( 'Movie Archives', 'agent-flow' ),
			'attributes'            => __( 'Movie Attributes', 'agent-flow' ),
			'parent_item_colon'     => __( 'Parent Movie:', 'agent-flow' ),
			'all_items'             => __( 'All Movies', 'agent-flow' ),
			'add_new_item'          => __( 'Add New Movie', 'agent-flow' ),
			'add_new'               => __( 'Add New', 'agent-flow' ),
			'new_item'              => __( 'New Movie', 'agent-flow' ),
			'edit_item'             => __( 'Edit Movie', 'agent-flow' ),
			'update_item'           => __( 'Update Movie', 'agent-flow' ),
			'view_item'             => __( 'View Movie', 'agent-flow' ),
			'view_items'            => __( 'View Movies', 'agent-flow' ),
			'search_items'          => __( 'Search Movie', 'agent-flow' ),
			'not_found'             => __( 'Not found', 'agent-flow' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'agent-flow' ),
			'featured_image'        => __( 'Featured Image', 'agent-flow' ),
			'set_featured_image'    => __( 'Set featured image', 'agent-flow' ),
			'remove_featured_image' => __( 'Remove featured image', 'agent-flow' ),
			'use_featured_image'    => __( 'Use as featured image', 'agent-flow' ),
			'insert_into_item'      => __( 'Insert into Movie', 'agent-flow' ),
			'uploaded_to_this_item' => __( 'Uploaded to this Movie', 'agent-flow' ),
			'items_list'            => __( 'Movies list', 'agent-flow' ),
			'items_list_navigation' => __( 'Movies list navigation', 'agent-flow' ),
			'filter_items_list'     => __( 'Filter Movies list', 'agent-flow' ),
		);
		$args   = array(
			'label'               => __( 'Movie', 'agent-flow' ),
			'description'         => __( 'The movies', 'agent-flow' ),
			'labels'              => $labels,
			'menu_icon'           => 'dashicons-admin-post',
			'supports'            => array(
				'title',
				'editor',
				'excerpt',
				'thumbnail',
				'revisions',
				'author',
				'comments',
				'trackbacks',
				'page-attributes',
				'custom-fields',
			),
			'taxonomies'          => array(),
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,
			'hierarchical'        => false,
			'exclude_from_search' => false,
			'show_in_rest'        => true,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
		);

		register_post_type( 'movies', $args );
	}
}
