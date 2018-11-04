<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header>
    <div id="logo">
      <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Academy Corporation">
    </div>
    <nav>
      <ul>
        <li><a href="<?php echo home_url(); ?>">TOP</a></li>
        <li><a href="<?php echo home_url(); ?>/about/">ABOUT</a></li>
        <li><a href="<?php echo home_url(); ?>/map/">MAP</a></li>
        <li><a href="<?php echo home_url(); ?>/blog/">BLOG</a></li>
        <li><a href="<?php echo home_url(); ?>/contact/">CONTACT</a></li>
      </ul>
    </nav>
  </header>
  <div id="cover">
    <div id="slide">
      <?php
        echo do_shortcode("[metaslider id=56]");
      ?>
    </div>
  </div>
<!-- ここからパンくずナビ -->
  <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
  </div>
 <!-- パンくずナビここまで --> 