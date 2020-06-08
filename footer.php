<footer>
  <div class="footer-content">

  <div class="widgets">

      <?php
        dynamic_sidebar('footer-1');
      ?>

  </div>
 
  <!-- /footer-content -->
  <div class="footer-credit">
    <p>
      Copyright © 2020 |
      <a class="footer-credit-link" href="/"><?php echo get_bloginfo('name'); ?></a>
      | Made with
      <i class="fas fa-heart"></i> by Connor Ocampo | View code in
      <a
        href="https://github.com/connorocampo/wp-theme-template"
        class="footer-credit-link"
        target="_blank"
        >GitHub</a
      >
    </p>
  </div>
</footer>

  <?php
      wp_footer();
  ?>

</body>
</html>