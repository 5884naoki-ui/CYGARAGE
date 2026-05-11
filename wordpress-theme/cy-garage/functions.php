<?php
/**
 * CY GARAGE — functions.php
 */

// テーマサポート
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-logo' );
add_theme_support( 'html5', [ 'search-form', 'comment-form', 'gallery', 'caption', 'navigation-widgets' ] );

// メニュー
register_nav_menus( [
    'primary' => 'メインナビゲーション',
] );

// スクリプト・スタイル
function cyg_enqueue_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'cyg-fonts',
        'https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Barlow+Condensed:wght@500;600;700;800&family=Noto+Sans+JP:wght@300;400;500;700&display=swap',
        [],
        null
    );
    // メインCSS
    wp_enqueue_style(
        'cyg-main',
        get_template_directory_uri() . '/assets/css/main.css',
        [ 'cyg-fonts' ],
        '1.0.0'
    );
    // メインJS
    wp_enqueue_script(
        'cyg-main',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        '1.0.0',
        true
    );
    // パララックス・スクロールリビールJS
    wp_enqueue_script(
        'cyg-parallax',
        get_template_directory_uri() . '/assets/js/parallax.js',
        [ 'cyg-main' ],
        '1.0.0',
        true
    );
    // テーマディレクトリURLをJSに渡す（画像パス用）
    wp_localize_script( 'cyg-main', 'CYG', [
        'themeUri' => get_template_directory_uri(),
        'homeUrl'  => home_url( '/' ),
    ] );
}
add_action( 'wp_enqueue_scripts', 'cyg_enqueue_scripts' );

// カスタム投稿タイプ
require_once get_template_directory() . '/inc/cpt.php';

// ============================================================
// ACF オプションページ
// ============================================================
add_action( 'acf/init', 'cyg_acf_options_page' );
function cyg_acf_options_page() {
    if ( ! function_exists( 'acf_add_options_page' ) ) return;

    acf_add_options_page( [
        'page_title' => 'サイト設定',
        'menu_title' => 'サイト設定',
        'menu_slug'  => 'cyg-site-settings',
        'capability' => 'edit_posts',
        'icon_url'   => 'dashicons-admin-settings',
        'position'   => 2,
        'redirect'   => false,
    ] );
}

// ACF フィールド定義（コードで登録 → 管理画面に依存しない）
add_action( 'acf/init', 'cyg_acf_register_fields' );
function cyg_acf_register_fields() {
    if ( ! function_exists( 'acf_add_local_field_group' ) ) return;

    acf_add_local_field_group( [
        'key'    => 'group_cyg_site_settings',
        'title'  => 'サイト設定',
        'fields' => [

            // ---- HERO ----
            [
                'key'           => 'field_cyg_hero_h1',
                'label'         => 'HERO キャッチコピー（H1）',
                'name'          => 'hero_h1',
                'type'          => 'textarea',
                'rows'          => 2,
                'default_value' => "まれしゃ好きは、\nここに来い。",
                'instructions'  => '改行は<br>に変換されます',
            ],
            [
                'key'           => 'field_cyg_hero_sub',
                'label'         => 'HERO サブコピー',
                'name'          => 'hero_sub',
                'type'          => 'textarea',
                'rows'          => 2,
                'default_value' => "被らない車。被らない人間。\nそういうやつが、ここにいる。",
            ],

            // ---- INSTAGRAM ----
            [
                'key'           => 'field_cyg_ig_handle',
                'label'         => 'Instagram ハンドル名',
                'name'          => 'ig_handle',
                'type'          => 'text',
                'default_value' => 'cy_garage_official',
                'instructions'  => '@は自動で付くので入力不要',
            ],
            [
                'key'           => 'field_cyg_ig_stat_number',
                'label'         => 'Instagram 月間リーチ数',
                'name'          => 'ig_stat_number',
                'type'          => 'text',
                'default_value' => '100万人',
            ],
            [
                'key'           => 'field_cyg_ig_stat_sub',
                'label'         => 'Instagram リーチ数 サブテキスト',
                'name'          => 'ig_stat_sub',
                'type'          => 'textarea',
                'rows'          => 2,
                'default_value' => "月間リーチしている、\nまれしゃのコミュニティ。",
            ],

            // ---- BOSS ----
            [
                'key'           => 'field_cyg_boss_body',
                'label'         => 'BOSSセクション 本文',
                'name'          => 'boss_body',
                'type'          => 'textarea',
                'rows'          => 3,
                'default_value' => "かましてる車が好きで、\n被りたくない人間の味方。\nそれだけをずっとやってきた。",
                'instructions'  => '改行は<br>に変換されます',
            ],

        ],
        'location' => [ [ [
            'param'    => 'options_page',
            'operator' => '==',
            'value'    => 'cyg-site-settings',
        ] ] ],
    ] );
}

/**
 * ACFオプションフィールドを取得するヘルパー。
 * ACFが未インストールの場合はデフォルト値を返す。
 */
function cyg_opt( string $key, string $default = '' ): string {
    if ( function_exists( 'get_field' ) ) {
        $val = get_field( $key, 'option' );
        return ( $val !== false && $val !== null && $val !== '' ) ? (string) $val : $default;
    }
    return $default;
}
