<?php
    get_header();
?>
<!-- /header -->

    <div class="main-content">

        <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();

                    // gets template part from template-parts.php folder
                    get_template_part('template-parts/content', 'page');
                }
            }
        ?>

      <section class="sidebar"> 

        <?php
          dynamic_sidebar('sidebar-1');
        ?>

    </div>
    <!-- /main content -->

<?php
    get_footer();
?>