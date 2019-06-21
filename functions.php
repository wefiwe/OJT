<?php
    // 記事にサムネイル画像を設定するためのコード
    add_theme_support('post-thumbnails');

    // カスタムメニューの「場所」を設定
    register_nav_menu( 'header-navi', 'ヘッダーナビ' );

    add_theme_support('custom-header',
    array (
        'header-text' => false,
    ));


?>