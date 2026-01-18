<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<nav class="navbar" id="navbar">
    <div class="container">
        <div class="nav-wrapper">
            <div class="logo">
                <?php if ( has_custom_logo() ) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <img src="https://nyc3.digitaloceanspaces.com/bhindi-drive/files/4a725b62-e212-4edd-9ac2-8617438abe9a/2026-01-18T19-25-40-922Z-94d4c424-chat-image-1768764340892-0.jpg" alt="<?php bloginfo( 'name' ); ?>">
                <?php endif; ?>
            </div>
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'nav-menu',
                    'container'      => 'nav',
                    'container_class' => '',
                    'fallback_cb'    => '__return_false',
                ) );
            ?>
            <button class="cta-btn" onclick="document.getElementById('contact').scrollIntoView({behavior: 'smooth'})">Book Consultation</button>
            <div class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</nav>