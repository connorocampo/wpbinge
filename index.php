<?php
    get_header();
?>
    
	<div class="main-content">
    <section class="blog-list">

      <!-- gets post or page content -->
		  <?php
        if (have_posts()) {
          while (have_posts()) {
            the_post();
            
            // gets template part from template-parts.php folder
            get_template_part('template-parts/content', 'archive');
          }
        }
      ?>

        <?php
            the_posts_pagination();
        ?>
            
    </section>
    <!-- /blog list -->

    
    <section class="sidebar">

        <?php
          dynamic_sidebar('sidebar-1');
        ?>
        
    </section>
    <!-- /sidebar -->

  </div>
  <!-- /main content -->
    
<?php
  get_footer();
?>