<?php get_header(); ?>
<div class="container-fluid">
    <h1 class="text-left-title-featured-sidebar" style="color: <?php echo get_theme_mod( 'set_itemheader_color', '#979797' ); ?>;"><?php _e('Archive', 'canitia'); ?></h1>
  <div <?php post_class(); ?>>
  <div class="row">
         <?php if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post(); ?>
                <div class="col-sm-4">
                <?php if ( has_post_thumbnail() ) : ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                        <?php the_post_thumbnail( 'thumbnail', ['class' => 'img-responsive ', 'title' => 'Feature image']); ?>
                    </a>
                <?php endif; ?>
                <a href="<?php the_permalink(); ?>">
                            <p title="<?php the_title_attribute(); ?>" class="truncate"><?php the_title(); ?>
                            </p>
                        </a>
                </div>
              <?php endwhile; else: ?>
                <div class="post-content">
                    <p><?php _e('Sorry, this archive is empty.', 'canitia'); ?></p>
                    <?php get_search_form(); ?>
                </div><!-- post-content END! -->
              <?php endif; ?>
            </div>
          <?php canitia_pagination_numeric_posts_nav(); ?>
    </div><!-- einde md8 -->

  </div><!-- container fluid END! -->

       <!-- start of footer -->
         <?php get_footer(); ?>