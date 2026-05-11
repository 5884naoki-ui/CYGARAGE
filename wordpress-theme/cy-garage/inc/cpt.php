<?php
/**
 * CY GARAGE — カスタム投稿タイプ定義
 */

// 在庫車両
function cyg_register_vehicles() {
    $labels = [
        'name'               => '在庫車両',
        'singular_name'      => '車両',
        'add_new'            => '新規追加',
        'add_new_item'       => '新しい車両を追加',
        'edit_item'          => '車両を編集',
        'new_item'           => '新しい車両',
        'view_item'          => '車両を表示',
        'search_items'       => '車両を検索',
        'not_found'          => '車両が見つかりません',
        'not_found_in_trash' => 'ゴミ箱に車両はありません',
        'menu_name'          => '在庫車両',
        'all_items'          => 'すべての車両',
    ];
    register_post_type( 'vehicles', [
        'labels'       => $labels,
        'public'       => true,
        'has_archive'  => true,
        'rewrite'      => [ 'slug' => 'vehicles' ],
        'supports'     => [ 'title', 'editor', 'thumbnail', 'excerpt' ],
        'menu_icon'    => 'dashicons-car',
        'show_in_rest' => true,
    ] );
}
add_action( 'init', 'cyg_register_vehicles' );

// お客様の声
function cyg_register_testimonials() {
    $labels = [
        'name'               => 'お客様の声',
        'singular_name'      => 'お客様の声',
        'add_new'            => '新規追加',
        'add_new_item'       => '新しい声を追加',
        'edit_item'          => '声を編集',
        'new_item'           => '新しい声',
        'view_item'          => '声を表示',
        'search_items'       => '声を検索',
        'not_found'          => '声が見つかりません',
        'not_found_in_trash' => 'ゴミ箱に声はありません',
        'menu_name'          => 'お客様の声',
        'all_items'          => 'すべての声',
    ];
    register_post_type( 'testimonials', [
        'labels'       => $labels,
        'public'       => true,
        'has_archive'  => true,
        'rewrite'      => [ 'slug' => 'testimonials' ],
        'supports'     => [ 'title', 'editor', 'thumbnail' ],
        'menu_icon'    => 'dashicons-format-quote',
        'show_in_rest' => true,
    ] );
}
add_action( 'init', 'cyg_register_testimonials' );
