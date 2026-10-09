<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo esc_url( lucky_theme_asset( 'favicon/apple-icon-57x57.png' ) ); ?>">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo esc_url( lucky_theme_asset( 'favicon/apple-icon-60x60.png' ) ); ?>">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo esc_url( lucky_theme_asset( 'favicon/apple-icon-72x72.png' ) ); ?>">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo esc_url( lucky_theme_asset( 'favicon/apple-icon-76x76.png' ) ); ?>">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo esc_url( lucky_theme_asset( 'favicon/apple-icon-114x114.png' ) ); ?>">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo esc_url( lucky_theme_asset( 'favicon/apple-icon-120x120.png' ) ); ?>">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo esc_url( lucky_theme_asset( 'favicon/apple-icon-144x144.png' ) ); ?>">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo esc_url( lucky_theme_asset( 'favicon/apple-icon-152x152.png' ) ); ?>">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url( lucky_theme_asset( 'favicon/apple-icon-180x180.png' ) ); ?>">
  <link rel="icon" type="image/png" sizes="192x192" href="<?php echo esc_url( lucky_theme_asset( 'favicon/android-icon-192x192.png' ) ); ?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url( lucky_theme_asset( 'favicon/favicon-32x32.png' ) ); ?>">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo esc_url( lucky_theme_asset( 'favicon/favicon-96x96.png' ) ); ?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url( lucky_theme_asset( 'favicon/favicon-16x16.png' ) ); ?>">
  <link rel="manifest" href="<?php echo esc_url( lucky_theme_asset( 'favicon/manifest.json' ) ); ?>">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?php echo esc_url( lucky_theme_asset( 'favicon/ms-icon-144x144.png' ) ); ?>">
  <meta name="theme-color" content="#ffffff">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <!-- Header -->
    <header class="header">
      <div class="container">
        <div class="header__inner">
          <!-- Logo -->
          <a href="#!"
            ><img src="<?php echo esc_url( lucky_theme_asset( 'img/logo.svg' ) ); ?>" alt="Lucy" class="logo"
          /></a>

          <!-- Navbar -->
          <nav class="navbar">
            <ul class="navbar__list">
              <li class="navbar__item">
                <a href="#!" class="navbar__link">Home</a>
              </li>
              <li class="navbar__item">
                <a href="#!" class="navbar__link">About</a>
              </li>
              <li class="navbar__item">
                <a href="#!" class="navbar__link"> Services & Rates </a>
              </li>
              <li class="navbar__item">
                <a href="#!" class="navbar__link">Reviews</a>
              </li>
              <li class="navbar__item">
                <a href="#!" class="navbar__link"> Contacts us </a>
              </li>
            </ul>
          </nav>

          <!-- Header action -->
          <div class="header-action">
            <a href="#!" class="header-action__link">Sign in</a>
            <a href="#!" class="btn header-action__btn">Sign up</a>
          </div>
        </div>
      </div>
    </header>


