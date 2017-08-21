<div class="footer">
  <a href="<?php echo site_url()?>" class="footer-logo">
    <img class="logo-image" src="<?php echo get_template_directory_uri(); ?>/images/footer-logo.svg">
  </a>
  <div class="footer-info">
    Building the Future of Schools

    <?php
    if ( get_theme_mod( 'footer_action_text' ) ) 
    echo '&#8226;  <a class="info-footer_action" href="'.get_theme_mod( 'footer_action_url' ).'">'.get_theme_mod( 'footer_action_text' ).'</a>';
    ?>
  </div>
</div>

<?php wp_footer();?>

</body>
</html>
