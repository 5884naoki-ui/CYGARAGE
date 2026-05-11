<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> id="page-body">

<!-- HEADER -->
<header id="main-header">
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">CY <span>GARAGE</span></a>
  <nav class="main-nav" id="main-nav">
    <a href="<?php echo esc_url( home_url( '/#inventory' ) ); ?>">在庫</a>
    <a href="<?php echo esc_url( home_url( '/#voice' ) ); ?>">オーナーの声</a>
    <a href="<?php echo esc_url( home_url( '/#why' ) ); ?>">なぜCY</a>
    <a href="<?php echo esc_url( home_url( '/wrapping/' ) ); ?>">ラッピング</a>
    <a href="<?php echo esc_url( home_url( '/#appraisal' ) ); ?>" class="nav-cta">無料査定</a>
  </nav>
  <button class="mobile-menu-btn" id="mobile-menu-btn" aria-label="メニュー">
    <span></span><span></span><span></span>
  </button>
</header>
