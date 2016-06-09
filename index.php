<?php get_header(); ?>

  <div class="row">
    <?php
    $args = array(
     'posts_per_page' => 3,
     'post__in'  => get_option( 'sticky_posts' )
    );
    $query = new WP_Query( $args );

    if ( $query->have_posts() ) : ?>
            <div class="slider hide-on-small-only">
                <ul class="slides">
                 <?php
                 // The Loop
                 if ( $query->have_posts() ) {
                  while ( $query->have_posts() ) {
                    $query->the_post();
                    echo '<li>';
                    echo '<p class="postdate right"><i class="fa fa-star"></i> Featured</p>';?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <?php if ( has_post_thumbnail() ) {
                                  the_post_thumbnail( 'medium', array( 'class' => 'responsive-img' ) );
                          } else { ?>
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/no-pic-available.jpg" alt="<?php the_title_attribute(); ?>" />
                            <?php }; ?>
                    </a><?php
                    echo '<div class="caption center-align"><h3 class="text-left-title-featured accentcolor2">';
                    the_title();
                    echo '</h3></div></li>';

                  }
                 } else {
                  // no posts found
                 }
                 /* Restore original Post Data */
                 wp_reset_postdata();
          ?>




                        </ul>
            </div><!-- .slider -->
            
    <div class="main-content col s12 m12 l8">
                        <?php
                        if ( have_posts() ) : while ( have_posts() ) : the_post();
                        ?>
                                      <div class="card large">
                                        <p class="postdate right"><i class="fa fa-clock-o"></i><time><?php echo get_the_date(); ?></time>
                                          <div class="card-image">
                                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                            <?php if ( has_post_thumbnail() ) {
                                                          the_post_thumbnail( 'medium', array( 'class' => 'responsive-img' ) );
                                                  } else { ?>
                                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/no-pic-available.jpg" alt="<?php the_title_attribute(); ?>" />
                                                    <?php }; ?>
                                            </a>
                                            <span class="card-title">
                                              <p class="posttitle"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
                                              </span>
                                          </div>
                                          <div class="card-content">
                                            <?php the_excerpt(); ?>
                                          </div>
                                        </div>

                            <!-- error handling -->
                            <?php endwhile; else: ?>
                        		      <p><?php echo wpautop( 'Sorry, seems there are no posts available' ); ?></p>
                            <?php endif; ?>

                    </div><!-- einde md8 -->  <!-- column end! -->

                    <!-- second column (widget bar) -->
                    <div class="col s12 m12 l4 hide-on-med-and-down">
                        <?php get_sidebar( 'primary' ); ?>
                    </div>

    </div><!-- end row inside -->
</div><!-- container fluid END! -->

<!-- start of footer -->
<?php get_footer(); ?>
