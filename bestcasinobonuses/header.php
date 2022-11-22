<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?><?php echo get_the_title() !== '' ? ' - ' . get_the_title() : ' - ' . single_cat_title(); ?></title>
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<header>
    <div class="logo-menu-container">
        <div class="logo">
            <a href="<?php echo get_site_url(); ?>">
                <?php $custom_logo_id = get_theme_mod('custom_logo'); ?>
                <?php $image = wp_get_attachment_image_src($custom_logo_id, 'full'); ?>
                <img src="<?php echo $image[0]; ?>">
            </a>
        </div>
        <div class="menu">
            <?php echo wp_nav_menu(array('menu' => 'Main menu')); ?>
        </div>
        <div class="menu-breakpoint">
            <?php echo wp_nav_menu(array('menu' => 'Main menu')); ?>
        </div>
        <div class="hamburger">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
    </div>
</header>













