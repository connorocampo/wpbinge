<?php
    get_header();
?>
    
	<div class="main-content">
    <section class="page-container">
      <div class="page">

        <h1>404 Error: Page Not Found</h1>
        <p>The page you are looking for has been moved or no longer exists. Try searching for the topic below instead.</p>

        <span id="error-search-box">
          <?php
              get_search_form();
          ?>
        </span>
      
      </div>
      <!-- /page -->
    </section>
    <!-- /page-container -->

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