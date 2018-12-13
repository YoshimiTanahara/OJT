<?php
    add_theme_support('post-thumbnails');
    // アイキャッチ画像の選択肢を追加する

    add_theme_support('menus');
    //外観にメニューを追加


// Custom Image Refferences
// https://wpdocs.osdn.jp/%E3%82%AB%E3%82%B9%E3%82%BF%E3%83%A0%E3%83%98%E3%83%83%E3%83%80%E3%83%BC
// https://www.imamura.biz/blog/6704
$defaults = array(
    'default-image'          => '',
    'random-default'         => false,
    'width'                  => '1020px',
    'height'                 => '450px',
    'flex-height'            => false,
    'flex-width'             => false,
    'default-text-color'     => '',
    'header-text'            => true,
    'uploads'                => true,
    'wp-head-callback'       => '',
    'admin-head-callback'    => '',
    'admin-preview-callback' => '',
);
add_theme_support('custom-header', $defaults );
    //メインビジュアルの画像が編集できるように機能追加