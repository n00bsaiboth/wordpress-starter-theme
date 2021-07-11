<!doctype html>

<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo("charset"); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
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
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>
                <?php if( is_front_page() || is_home() || is_front_page() && is_home()) { echo "</h1>"; } ?>               
            </div>

            <div>
                <?php bloginfo( 'description' ); ?>
            </div>
        </div>

    </header>

    <section>

    
