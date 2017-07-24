<?php get_header();?>
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post();?>
  
  <div class="col-xs-12 col-md-12 col-lg-12 page-ui">
    <div <?php post_class();?>>
    <article>
      <h1 class="text-center"><?php the_title();?></h1>
      <div class="post-subitems text-center">
        <i class="fa fa-clock-o"></i><time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date();?></time>
        <i class="fa fa-user" aria-hidden="true"></i><?php the_author_posts_link();?>
      </div>
   <hr />
      <div class="post-content">
        <?php the_content();?>
      </div>  
        <?php if ( get_theme_mod( 'show_author_section', 'show' ) == 'show' ) :
            get_template_part( 'partials/authorsection' ); 
        endif; ?>
        </article><!-- close article -->
  </div><!-- close post class div -->
  <!-- error handling -->
  <?php endwhile; else: ?>
          <div class="post-content post-errortext">
            <p><?php _e('Sorry, this page can not be found or has been deleted.', 'canitia'); ?></p>
            <?php get_search_form(); ?>
        </div><!-- post-content END! -->
  <?php endif;?>

   <?php wp_link_pages('before=<ul class="pagination pagination-within center-align" role="navigation">&after=</ul>&link_before=<li>&link_after=</li>');?>

</div><!-- einde md8 -->

<!-- start of footer -->
<?php get_footer();?>
