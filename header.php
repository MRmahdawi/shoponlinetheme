<!DOCTYPE html>
<html <?php language_attributes(); ?>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="googlebot" content="index,follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
    <title>
        <?php if (is_home()) {
            bloginfo('name');
        } elseif (is_category()) {
            single_cat_title();
        } elseif (is_product_category()) {
            the_archive_title();
        } elseif (is_single()) {
            single_post_title();
        } elseif (is_page()) {
            single_post_title();
        } else {
            wp_title(”, true);
        } ?>
    </title>
</head>
<body <?php body_class(); ?>>
<div class="container">
    <!-- Start Style Logo --->
    <div class="row">
        <div class="col-xs-6 col-sm-6">
            <div class="logosite">
                <a href="<?php echo home_url() . '/'; ?>" target="_blank">
                    <img src="<?php bloginfo('template_url'); ?>/images/Logo.jpg" alt="کارسازشو" title="کارسازشو">
                </a>
            </div>
        </div>
    </div>
    <!-- Start Menu Top Site --->
    <div class="row">
        <div class="col-xs-12">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!---- Start Mobile Toggle --->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-navbar-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!---- End Mobile Toggle --->
                    <div class="pull-right menurespon">
                        <div class="collapse navbar-collapse menus" id="bs-navbar-1">

                            <?php

                            if (has_nav_menu('one_menu')) {
                                wp_nav_menu(array(
                                    'theme_location' => 'one_menu',
                                    'menu_class' => ' nav navbar-nav',
                                    'container' => false
                                ));
                            }


                            ?>
                        </div>
                    </div>
                    <div class="search pull-left hidden-xs">
                        <form method="get" action="<?php echo esc_url(home_url('/')); ?>">
                            <input type="text" name="s" value="" placeholder="جستجو در سایت...">
                            <button><span class="glyphicon glyphicon-search"></span></button>
                        </form>
                    </div>

                </div>
            </nav>
        </div>
    </div>