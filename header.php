<!DOCTYPE html>
<html <?php language_attributes();
?>>
<head>
    <!-- some meta -->
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type');?>; charset=<?php bloginfo('charset');
?>" />
    <meta name="generator" content="WordPress <?php bloginfo('version');?>" />
    <meta name="description" content="<?php bloginfo( 'description' );?>" />
    <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() );?>/favicon.ico" />
    <meta charset="<?php bloginfo( 'charset' );?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- rss, pingback -->
    <link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo( 'rss2_url' )?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url');?>" />

    <title><?php wp_title();?></title>
    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' );?>

    <!-- close with wp_head -->
    <?php wp_head();?>
</head>

<body <?php body_class();?>>

<!-- start of the actual header -->
<header>
    <div class="navbar-fixed">
    <nav class="white">
      <div class="nav-wrapper">
        <a href="#" data-activates="slide-out" class="button-collapse left"><i class="fa fa-bars" aria-hidden="true"></i></a>
        <?php if ( function_exists( 'the_custom_logo' ) ) {
	
	        the_custom_logo();
            
        }
        ?>
        <p class="brand-logo">
            <a href="<?php echo home_url();?>" class="headerurl" style="color: #<?php echo get_header_textcolor();?> !important;"><?php bloginfo('name');?></a>
        </p>

         <ul id="nav-mobile" class="right hide-on-med-and-down">
           <?php
            wp_nav_menu(
                array(
                 'theme_location' => 'header-menu',
                  'fallback_cb' => false
                )
            );

            ?>
         </ul>

        <ul id="slide-out" class="side-nav">
            <h1 class="text-left-title-featured-sidebar">Menu</h1>
          <?php
            wp_nav_menu(
                array(
                 'theme_location' => 'header-menu',
                 'fallback_cb' => false
                )
            );

            ?>
        </ul>

</div>
</nav>

</div>
</header>
<div class="container-fluid">
