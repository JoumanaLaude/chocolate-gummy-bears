<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header id="site-header">
    <nav>
        <button class="menu-toggle" aria-label="Toggle Menu"><i class="fas fa-bars"></i></button>
        <?php 
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu_id' => 'primary-menu',
            'menu_class' => 'menu', // optional
        ));
        ?>
    </nav>
</header>
