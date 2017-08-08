  </div><!-- .site-container -->
  <footer class="footer">
    <div class="line">
    </div>
    <div class="footer-content">
      <div class="footer-widget-1">
        <?php if ( dynamic_sidebar( 'footer_widget_1' ) ); ?>
      </div>
      <div class="footer-widget-2">
        <?php if ( dynamic_sidebar( 'footer_widget_2' ) ); ?>
      </div>
      <div class="footer-widget-3">
        <?php if ( dynamic_sidebar( 'footer_widget_3' ) ); ?>
      </div>
    </div>
  </footer>

<?php wp_footer(); ?>

</body>
</html>
