<!doctype html>

<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo("charset"); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="Wordpress starter theme.">
        <meta name="author" content="Jussi Jokinen">

        <meta property="og:title" content="Wordpress starter theme">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://www.wordpress.com/">
        <meta property="og:description" content="A simple starter theme for Wordpress.">
        <meta property="og:image" content="/assets/img/image.png">

        <link rel="icon" href="/assets/img/favicon.ico">
        <link rel="icon" href="/assets/img/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/assets/img/apple-touch-icon.png">

        <?php wp_head(); ?>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<main class="container">
    <nav>
        <?php wp_nav_menu( array("theme-location" => "main-menu")); ?>
    </nav>

    <header>
        <div>
            <div>
                <?php if( is_front_page() || is_home() || is_front_page() && is_home()) { echo "<h1>"; } ?>
                    <a class="page-header" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>
                <?php if( is_front_page() || is_home() || is_front_page() && is_home()) { echo "</h1>"; } ?>               
            </div>

            <div>
                <?php bloginfo( 'description' ); ?>
            </div>
        </div>

    </header>

    <div>
        <hr />
    </div>

    <section>

    
