</div><!-- container END! -->
</main>
<footer class="footer">
      <div class="container">
        <p class="text-center text-muted">
            <?php
              $getActiveTheme = wp_get_theme();

              echo '<strong>' . $getActiveTheme->get( 'Name' ) . ' </strong>' . ' ' . $getActiveTheme->get( 'Version' ) ;
            ?>    
        </p>
      </div>
          <!-- close with Wordpress footer aka adminbar etc. -->
       <?php wp_footer();?>
</footer>
<script>
  WebFont.load({
    google: {
      families: ['Source Sans Pro:600', 'Asap', 'Anaheim']
    }
  });
</script>
  </body>
</html>