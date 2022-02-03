<?php
    function custom_theme_support() {
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));
            add_theme_support( 'post-thumbnails' );
            add_theme_support( 'title-tag' );
            add_theme_support( 'menus' );
            // register_nav_menus( array(
            //     'footer_nav' => esc_html__( 'フッターナビ', 'rtbread' ),
            //     'category_nav' => esc_html__( 'サイドバーメニュー', 'rtbread' ),
            // ));
        }
        add_action( 'after_setup_theme', 'custom_theme_support' );

    function wpbeg_script() {
        wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/f73796a947.js', array(), '', true);
        wp_enqueue_style( 'mplus1-r', '//fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@700&family=Roboto:wght@300;400&display=swap', array() );
        wp_enqueue_style( 'mplus1-b', '//mplus-fonts.sourceforge.jp/webfonts/basic_latin/mplus_webfonts.css', array() );
        wp_enqueue_style( 'mplus1-g', '//mplus-fonts.sourceforge.jp/webfonts/general-j/mplus_webfonts.css', array() );
        wp_enqueue_style( 'ress', '//unpkg.com/ress/dist/ress.min.css', array() );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array(), '' );
        wp_enqueue_style( 'jquery', get_template_directory_uri() . '/js/jquery-2.1.4.min.js', array(), '' );
        wp_enqueue_style( 'script', get_template_directory_uri() . '/css/js/script.js', array(), '' );

    }
    add_action( 'wp_enqueue_scripts', 'wpbeg_script' );

    // カスタムメニューを有効化
// function register_my_menus() {
//     register_my_menus( array(
//         ''
//     ));
// }
// add_action();

//     // クラス名を削除
// function remove_nav_class($class) {
//     return $class = array();
// }
// add_filter("nav_menu_css_class", "remove_nav_class");

// id名を削除
function remove_nav_id($id) {
    return $id = array();
}
add_filter("nav_menu_item_id", "remove_nav_id");


    // function wpbeg_script() {
    //     wp_enqueue_style( 'mplus1p', '//fonts.googleapis.com/earlyaccess/mplus1p.css', array() );
    //     wp_enqueue_style( 'Sacramento', '//fonts.googleapis.com/css?family=Sacramento&amp;amp;subset=latin-ext', array() );
    //     wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0' );
    //     wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(), '4.5.0' );
    //     wp_enqueue_style( 'wpbeg', get_template_directory_uri() . '/css/wpbeg.css', array(), '1.0.0' );
    //     wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
    // }
    // add_action( 'wp_enqueue_scripts', 'wpbeg_script' );

    // wp_enqueue_script( 'mplus1p', '//fonts.googleapis.com/earlyaccess/mplus1p.css', array() );