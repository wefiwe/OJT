<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo wp_get_document_title(); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <?php wp_head(); ?>
</head>
<body>
    <header>
    <div class="header-left">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/folder/logo.png" alt="">
    </div>
    <nav class="header-right">
    <?php wp_nav_menu(
      array (
        //カスタムメニュー名
        'theme_location' => 'header-navi',
        //コンテナを表示しない
        'container' => false,
        //カスタムメニューを設定しない際に固定ページでメニューを作成しない
        'fallback_cb' => false,
        //出力されるulに対してidやclassを表示しない
        'items_wrap' => '<ul class="menu">%3$s</ul>',
      )
    ); ?>

        <!-- <ul class="menu">
            <li><a href="">Menu01</a></li>
            <li><a href="">Menu02</a></li>
            <li><a href="">Menu03</a></li>
            <li><a href="">Menu04</a></li>
        </ul> -->
    </nav>
        <div class="sample">
        <img src="<?php header_image(); ?>" alt="">
        <!-- <img src="./assets/img/folder/visual_1_pc.png" alt=""> -->
        </div>
        <div class="text">
            <p>進化し続ける「街」アメリカンビレッジマガジン</p>
        </div>
        <div class="text-icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/folder/visual_text_pc.png" alt="">
        </div>
    </header>


    <!-- <header> -->






    
