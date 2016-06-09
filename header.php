<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- some meta -->
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
    <meta name="description" content="<?php bloginfo( 'description' ); ?>" />
    <link rel="shortcut icon" href="<?php echo get_template_directory(); ?>/favicon.ico" />
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- my own css file (style.css) -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.screen.css" type="text/css" type="text/css" />

    <!-- other used items -->
    <link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/materialize.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/font-awesome.min.css">

    <!-- rss, pingback -->
    <link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo get_feed_link( 'rss2_url' )?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <title><?php wp_title(); ?></title>
    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

    <!-- close with wp_head -->
    <?php wp_head(); ?>
</head>

<body <?php body_class();?>>

<!-- start of the actual header -->
<header>
    <div class="navbar-fixed">
    <nav class="accentcolor">
      <div class="nav-wrapper">
        <?php if ( function_exists( 'the_custom_logo' ) ) {
            the_custom_logo();
        }?>
        <p class="brand-logo center">
            <a href="<?php echo home_url();  ?>" class="headerurl" style="color: #<?php echo get_header_textcolor(); ?> !important;"><?php bloginfo('name'); ?></a>
        </p>

         <ul id="nav-mobile" class="right hide-on-med-and-down">
           <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
         </ul>
         <a href="#" data-activates="slide-out" class="button-collapse right"><i class="fa fa-bars" aria-hidden="true"></i></a>

<ul id="slide-out" class="side-nav">
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
</ul>

</div>
</nav>

</div>
</header>
<div class="container-fluid">
<!-- <img src="<?php header_image(); ?>" height="<?php // echo get_custom_header()->height; ?>" width="<?php //echo get_custom_header()->width;?>" class="center-align"  alt="header image" /> -->
