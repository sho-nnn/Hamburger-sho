<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="<?php bloginfo('charset') //文字エンコーディング情報を出力 ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true. 'right'); // ページタイトルを出力 ?><?php bloginfo('name'); //サイト名を出力 ?></title>
    <script src="https://kit.fontawesome.com/3933299172.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@700&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
    href="http://mplus-fonts.sourceforge.jp/webfonts/basic_latin/mplus_webfonts.css">
    <link rel="stylesheet" type="text/css"
    href="http://mplus-fonts.sourceforge.jp/webfonts/general-j/mplus_webfonts.css">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); //使用中テーマのスタイルシートurlを出力 ?>">
    <script src="./js/jquery-2.1.4.min.js"></script>
    <script src="./js/script.js"></script>
    <?php wp_head(); //wp_headはテーマの</head>タグ直前に必ず挿入 ?>
</head>
<body class="header">
    <div class="container">
        <header class="l-header">
            <div class="p-header">
                <h1 class="c-title p-header__title">Hamburger</h1>
                <form class="p-header__search-form" action="#">
                    <input class="c-box p-header__search-form__box" type="search">
                    <input class="c-button p-header__search-form__button" type="submit" value="検索">
                </form>
                <h2 class="c-subtitle01 p-header__menu-button"><button class="js-sidebar">Menu</button></h2>
            </div>
        </header>