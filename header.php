<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>

</head>

<body>

    <h1>
        <?php bloginfo('name'); ?>
    </h1>
    <h2>
        <?php bloginfo('description'); ?>
    </h2>

    <nav class="main-navigation">
        <?php wp_nav_menu(
            ['theme_location' => 'primary']
        ); ?>
    </nav>

    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/placeholder.gif" alt="<?php bloginfo('name'); ?>">