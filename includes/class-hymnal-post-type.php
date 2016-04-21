<?php

/**
 * Register the custom post type for the plugin
 *
 * @link       https://creativelittledots.co.uk
 * @since      1.0.0
 *
 * @package    Hymnal
 * @subpackage Hymnal/includes
 */

/**
 * Register the custom post type for the plugin
 *
 * @package    Hymnal
 * @subpackage Hymnal/includes
 * @author     Darby Manning <darby@creativelittledots.co.uk>
 */
class Hymnal_PostType {
    
    /**
	 * The text domain to be used in this plugin
	 *
	 * @since  	1.0.0
	 * @access 	private
	 * @var  	string 		$textdomain 	Text domain of this plugin
	 */
	private $textdomain = 'hymnal';
    
    /**
     * Register a hymnal post type.
     *
	 * @since  	1.0.0
	 * @access 	public
     * @link    http://codex.wordpress.org/Function_Reference/register_post_type
     */
	public function register_post_type() {

        add_action( 'init', 'hymnal_post_type' );

    	$labels = array(
    		'name'               => _x( 'Hymnals', 'post type general name', $this->textdomain ),
    		'singular_name'      => _x( 'Hymnal', 'post type singular name', $this->textdomain ),
    		'menu_name'          => _x( 'Hymnals', 'admin menu', $this->textdomain ),
    		'name_admin_bar'     => _x( 'Hymnal', 'add new on admin bar', $this->textdomain ),
    		'add_new'            => _x( 'Add New', 'hymnal', $this->textdomain ),
    		'add_new_item'       => __( 'Add New Hymnal', $this->textdomain ),
    		'new_item'           => __( 'New Hymnal', $this->textdomain ),
    		'edit_item'          => __( 'Edit Hymnal', $this->textdomain ),
    		'view_item'          => __( 'View Hymnal', $this->textdomain ),
    		'all_items'          => __( 'All Hymnals', $this->textdomain ),
    		'search_items'       => __( 'Search Hymnals', $this->textdomain ),
    		'parent_item_colon'  => __( 'Parent Hymnals:', $this->textdomain ),
    		'not_found'          => __( 'No hymnals found.', $this->textdomain ),
    		'not_found_in_trash' => __( 'No hymnals found in Trash.', $this->textdomain )
    	);
    
    	$args = array(
    		'labels'             => $labels,
            'description'        => __( 'Description.', $this->textdomain ),
    		'public'             => false,
    		'publicly_queryable' => true, // Required for archive
    		'show_ui'            => true,
    		'show_in_menu'       => true,
    		'menu_icon'          => 'dashicons-playlist-audio',
    		'query_var'          => false,
    		'rewrite'            => array( 'slug' => 'hymnal' ),
    		'capability_type'    => 'post',
    		'has_archive'        => true,
    		'hierarchical'       => false,
    		'menu_position'      => null,
    		'supports'           => array( 'title', 'editor', 'page-attributes' ),
    		'taxonomies'         => array( 'post_tag' )
    	);
    
    	register_post_type( 'hymnal', $args );
    }
    
    /**
     * Register an 'artist' taxonomy for post type 'hymnal'.
     *
	 * @since  	1.0.0
	 * @access 	public
     * @link    http://codex.wordpress.org/Function_Reference/register_taxonomy
     */
    public function register_taxonomy() {

    	$labels = array(
    		'name'                       => _x( 'Artists', 'taxonomy general name' ),
    		'singular_name'              => _x( 'Artist', 'taxonomy singular name' ),
    		'search_items'               => __( 'Search Artists' ),
    		'popular_items'              => __( 'Popular Artists' ),
    		'all_items'                  => __( 'All Artists' ),
    		'parent_item'                => null,
    		'parent_item_colon'          => null,
    		'edit_item'                  => __( 'Edit Artist' ),
    		'update_item'                => __( 'Update Artist' ),
    		'add_new_item'               => __( 'Add New Artist' ),
    		'new_item_name'              => __( 'New Artist Name' ),
    		'separate_items_with_commas' => __( 'Separate artists with commas' ),
    		'add_or_remove_items'        => __( 'Add or remove artists' ),
    		'choose_from_most_used'      => __( 'Choose from the most used artists' ),
    		'not_found'                  => __( 'No artists found.' ),
    		'menu_name'                  => __( 'Artists' ),
    	);
    
    	$args = array(
    		'hierarchical'          => true,
    		'labels'                => $labels,
    		'show_ui'               => true,
    		'show_admin_column'     => true,
    		'update_count_callback' => '_update_post_term_count',
    		'query_var'             => true,
    		'rewrite'               => array( 'slug' => 'artist' ),
    	);
    
    	register_taxonomy( 'artist', 'hymnal', $args );   
        
    }
 
     /**
     * Add a filter so that we can specifiy the template folder location.
     *
	 * @since  	1.0.0
	 * @access 	public
     */   
    public function template_folder_filter() {
        add_filter( 'template_include', 'template_folder' );
    }
    
     /**
     * Specifiy the folder location we want to use.
     *
	 * @since  	1.0.0
	 * @access 	public
     */   
    public function template_folder( $template ) {

    	$plugin_template_dir = plugin_dir_path( dirname( __FILE__ ) ) . 'public/templates/';
    	$theme_template_dir = get_stylesheet_directory() . '/public/templates/';

        if ( get_post_type () ) :

            if ( is_archive() ) :

                if ( file_exists($theme_template_dir . 'archive-' . get_post_type() . '.php') ) :

                    return $theme_template_dir . 'archive-' . get_post_type() . '.php';

                elseif ( file_exists($plugin_template_dir . 'archive-' . get_post_type() . '.php') ) :

                    return $plugin_template_dir . 'archive-' . get_post_type() . '.php';
                    
                endif;

            endif;
            
            if ( is_single() ) :

                if ( file_exists($theme_template_dir . 'single-' . get_post_type() . '.php') ) :

                    return $theme_template_dir . 'single-' . get_post_type() . '.php';

                elseif ( file_exists($plugin_template_dir . 'single-' . get_post_type() . '.php') ) :

                    return $plugin_template_dir . 'single-' . get_post_type() . '.php';
                    
                endif;

            endif;

        endif;
        
        return $template;
    }
}