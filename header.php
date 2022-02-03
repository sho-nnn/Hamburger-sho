<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <div class="container">
        <header class="l-header">
            <div class="p-header">
                <h1 class="c-title p-header__title"><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
                <?php get_search_form(); ?>
                <!-- <h2 class="c-subtitle01 p-header__menu-button"><button class="js-sidebar">Menu</button></h2> -->
            </div>
        </header>