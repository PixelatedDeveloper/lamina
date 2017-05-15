<?php get_header(); ?>

     <div class="row">
                 <div class="tag_heading">
                 <h3><?php single_tag_title(); ?></h3>
                 </div>
               <div class="col s12 m12 l12 main-content">
                              <?php if ( have_posts() ) : ?>
                                  <?php while ( have_posts() ) : the_post(); ?>
                                    <div class="card">
                                          <div <?php post_class(); ?>>
                                              <article>
                                                <div class="card-image">
                                                  <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                                    <?php if ( has_post_thumbnail() ) {
                                                        the_post_thumbnail( 'large', array( 'class' => 'responsive-img' ) );
                                                          } else { ?>
                                                          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/no-pic-available.jpg" alt="<?php the_title_attribute(); ?>"  class="responsive-img" />
                                                          <?php }; ?>
                                                  </a>
                                                  <span class="card-title">
                                                    <p class="posttitle"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
                                                    </span>
                                                </div>
                                                <div class="card-content">
                                                  <p class="postdate center-align">
                                                    <i class="fa fa-clock-o"></i><time><?php echo get_the_date(); ?></time>
                                                    <i class="fa fa-user-secret"></i>  <?php the_author_posts_link();?>
                                                    <?php if( is_sticky() ) {
                                                      ?><i class="fa fa-star"></i> Featured
                                                  <?php  } ?>
                                                  </p>
                                                  <p><?php the_excerpt(); ?></p>
                                                </div>
                                              </article><!-- close article -->
                                      </div><!-- close post class div -->
                                    </div>
                                          <!-- column end! -->

                                      <!-- error handling -->
                                      <?php endwhile; else: ?>
                                  		      <p><?php echo wpautop( 'Sorry, this post can not be found' ); ?></p>
                                      <?php endif; ?>

                                      <!-- navigation?-->

                                    <ul class="pagination center-align" role="pagination">
                                      <?php if( get_previous_posts_link() ) :

                                      previous_posts_link( '<li class="pagination-arrows newer-posts"><i class="fa fa-arrow-left fa-2x"></i></li>' );

                                      endif; ?>

                                      <li class="active"><?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; echo $paged; ?></li>
                                      <?php if( get_next_posts_link() ) :

                                      next_posts_link( '<li class="pagination-arrows older-posts"><i class="fa fa-arrow-right fa-2x"></i></li>' );

                                      endif; ?>
                                    </ul>
                                    </div><!-- einde md8 -->

              <div class="col l4 hide-on-med-and-down">
                  <?php get_sidebar( 'primary' ); ?>
              </div>

            </div><!-- end row -->
          </div><!-- container fluid END! -->

          <!-- start of footer -->
          <?php get_footer(); ?>
