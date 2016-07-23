<?php
/**
 * Created by PhpStorm.
 * User: Greg
 * Date: 7/17/2016
 * Time: 5:55 PM
 */

    // Register Custom Navigation Walker
    require_once('wp_bootstrap_navwalker.php');

    function bulldozer_theme_setup(){

        //Nav Menus
        register_nav_menus( array(
            'primary' => __( 'Primary Menu', 'bulldozer' ),
        ) );

        //Add post thumbnails

        add_theme_support('post-thumbnails');

        //Post Formats

        add_theme_support('post-formats', array('aside','gallery'));
    }

    add_action('after_setup_theme', 'bulldozer_theme_setup');

    //Add custom bitcoin menu item to the main nav


    function bitcoin_nav_item( $nav, $args ) {
        $active = "";
        if(is_page('bitcoin')){
            $active =  "class='current_page_item active'";
        }

        if( $args->theme_location == 'primary' )
            return $nav."</ul><ul class='nav navbar-nav navbar-right'><li " . $active . "><a title='Bitcoin' href='/bitcoin'>
            <span class='glyphicon glyphicon-bitcoin'></span></a><li><a title='Github' target='blank' href='http://github.com/OleGreg'>
                <i class='fa fa-github fa-lg' aria-hidden='true'></i></a></li></li>";

        return $nav;
    }

    add_filter('wp_nav_menu_items','bitcoin_nav_item', 10, 2);

    //Excerpt Length Control
    function set_excerpt_length(){
        return 45;
    }

    add_filter('excerpt_length', 'set_excerpt_length');

    //widget locations
    function bulldozer_init_widgets($id){

        register_sidebar(array(
            'name' => 'Sidebar',
            'id' => 'sidebar',
            'before_widget' => '<div class="sidebar-module">',
            'after_widget' => '</div>',
            'before_title' => '<h4>',
            'after_title' => '</h4>'
        ));

        register_sidebar(array(
            'name' => 'Box1',
            'id' => 'box1',
            'before_widget' => '<div class="sidebar-module">',
            'after_widget' => '</div>',
            'before_title' => '<h4>',
            'after_title' => '</h4>'
        ));
    }

    add_action('widgets_init', 'bulldozer_init_widgets');

    //Register Custom Bootstrap Pagination

    require_once('inc/wp_bootstrap_pagination.php');

    // Customizer File

    require get_template_directory() . '/inc/customizer.php';
