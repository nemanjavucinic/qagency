<?php
/*
    Plugin Name: Q Agency
    Plugin URI: https://q.agency/
    Description: A Plugin that makes a movies database
    Version: 1.0
    Author: Nemanja Vucinic
*/

class QAgency
{

    public function __construct() {
        //Create the CPT
        add_action('init', array($this, 'moviesCPT'));
        //Add meta boxes
        add_action( 'add_meta_boxes', array( $this, 'q_add_meta_boxes' ));
        //Save meta box values
        add_action( 'save_post', array( $this, 'q_save_options' ) );
        // Register Gutenberg scripts
        add_action( 'init', array( $this, 'q_enqueue_gutenberg_scripts' ) );
        // Register Gutenberg block
        add_action( 'init', array( $this, 'q_register_block' ) );
        
    }

    public function moviesCPT() {
        // Register CPT
        $args = array(
            'labels' => array(
                'name' => esc_html__('Movies', 'qagency'),
                'singular_name' => esc_html__('Movie', 'qagency'),
            ),
            'menu_icon' => 'dashicons-format-video',
            'public' => true,
            'has_archive' => false,
            'show_in_rest' => true
        );
        register_post_type('movie', $args);       

        // Register custom fields
        register_meta('movie', 'movie_title', array(
            'show_in_rest' => true,
            'single' => true,
            'type' => 'string',
        ));    

    }

    /*
    * Add a gutenberg panel
    */
    public function q_add_meta_boxes(){
        //add_meta_box('movie_title_panel', 'Movie Title', 'render_movie_title_panel', 'movie', 'side', 'default');
        add_meta_box(
            'q_meta_box',
            'Q Meta Box',
            array( $this, 'q_render_custom_fields' ),
            'movie',
            'side',
            'default'
        );
    }

    /*
    * Render custom fields
    */
    public function q_render_custom_fields( $post ) {
        $movie_title = get_post_meta( $post->ID, 'movie_title', true );
        ?>
        <label for="movie_title">Movie Title:</label>
        <input type="text" id="movie_title" name="movie_title" value="<?php echo esc_attr( $movie_title ); ?>"/>
        <?php
    }

    /*
    * Save options
    */
    public function q_save_options( $post_id ) {
        if ( array_key_exists( 'movie_title', $_POST ) ) {
            update_post_meta( $post_id, 'movie_title', sanitize_text_field( $_POST['movie_title'] ) );
        }
    }

    public function q_enqueue_gutenberg_scripts() {
        
        // // Enqueue editor JS
        wp_enqueue_script(
            'qagency-gutenberg-favorite-movie-quote',
            plugins_url( 'gutenberg/blocks/favorite-movie-quote/favorite-movie-quote.js', __FILE__ ),
            //plugins_url( 'build/index.js', __FILE__ ),
            array( 'wp-blocks', 'wp-editor', 'wp-element' )
        );
    }
    

    public function q_register_block() {
        if ( ! function_exists( 'register_block_type' ) ) {
            return;
        }
    
        register_block_type(
            'qplugin/favorite-movie-quote',
            array(
                'editor_script' => 'qagency-gutenberg-favorite-movie-quote',
                'render_callback' => array( $this, 'render_block_favorite_movie_quote' ),
            )
        );
    }
    
    public function render_block_favorite_movie_quote( $attributes ) {
        if (isset ( $attributes['quote'] ) ){
            return '<blockquote class="q-favorite-quote this-is-php">' . $attributes['quote'] . '</blockquote>';
        }
    }

    
}

if (class_exists( 'QAgency' ) ){
    new QAgency();
}
