<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <link rel="stylesheet" href="https://use.typekit.net/oir1lrb.css">
	<link rel="shortcut icon" href="https://webcod6.com/wp-content/uploads/2024/01/meisi.jpeg">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <title><?php titles(); ?></title>
  <?php wp_head(); ?>
</head>
<body>
  <header>
    <div class="container header__inner">
      <h1 class="header__logo"><a href="<?php echo home_url(); ?>" class="header__logo__link"><span class="logo__stagger">N</span><span class="logo__stagger">A</span><span class="logo__stagger">O</span> <span class="logo__stagger">Y</span><span class="logo__stagger">A</span><span class="logo__stagger">M</span><span class="logo__stagger">A</span></a></h1>
      <div class="menu-button" id="menu-button">
        <div class="menu-button__line"></div>
        <div class="menu-button__line"></div>
        <div class="menu-button__line"></div>
      </div>
    </div>
    <nav class="header__nav" id="header__nav">
      <ul class="nav__list">
        <li class="nav__item"><a href="/about/" class="nav__link">About</a></li>
        <li class="nav__item"><a href="/archive/" class="nav__link">Works</a></li>
        <li class="nav__item"><a href="/price/" class="nav__link">Price</a></li>
        <li class="nav__item"><a href="/contact/" class="nav__link">Contact</a></li>
        <li class="nav__item"><a href="https://twitter.com/webcod_twi" target="_blank" class="nav__link">X（旧Twitter）</a></li>
      </ul>
    </nav>
    <div class="mask" id="mask"></div>
  </header>