<?php
    wp_enqueue_style("style", get_stylesheet_uri());
    wp_enqueue_style("normalize", get_template_directory_uri() . "/assets/css/normalize.css");
    wp_enqueue_style("simple-grid", get_template_directory_uri() . "/assets/css/simple-grid.css");
    wp_enqueue_style("navigation", get_template_directory_uri() . "/assets/css/navigation.css");

    function register_my_menus() {
        register_nav_menus(
            array(
                "main-menu" => __("Main menu")
            )
        );
    }

    add_action("init", "register_my_menus");
?>