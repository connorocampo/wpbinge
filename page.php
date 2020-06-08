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
        <h2 class="sidebar-header">Search The Blog</h2>
        <form role="search" method="get" id="searchform" class="searchform" action="http://localhost:8888/">
          <div>
            <label class="screen-reader-text" for="s">Search for:</label>
            <div class="search-box">
              <input type="text" value="" name="s" id="s">
            </div>
            <button type="submit" class="search-button" aria-label="search the blog button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </form>

        <?php
          dynamic_sidebar('sidebar-1');
        ?>

        <h2 class="sidebar-header">Tags</h2>
          <a href="http://localhost:8888/tag/seo/" class="tag">
            <i class="fas fa-tag"></i> SEO</a>
          <a href="http://localhost:8888/tag/wordpress-development/" class="tag">
            <i class="fas fa-tag"></i> WordPress Development</a>
          <a href="http://localhost:8888/tag/reviews/" class="tag tag-yellow">
            <i class="fas fa-tag"></i> Reviews</a>
          <a href="http://localhost:8888/tag/plugins/" class="tag tag-hotpink">
            <i class="fas fa-tag"></i> Plugins</a>
          <a href="http://localhost:8888/tag/opinion/" class="tag tag-blue-primary">
            <i class="fas fa-tag"></i> Opinion</a>
          <a href="http://localhost:8888/tag/recommended-tools/" class="tag tag-blue-tertiary">
            <i class="fas fa-tag"></i> Recommended Tools</a>
        

        <h2 class="sidebar-header">Social Media</h2>
          <a href="https://github.com/connorocampo" class="social-media-link"
            target="_blank" rel="noopener noreferrer">
            <i class="fab fa-github social-media-icon"></i></a>
          <a href="https://codepen.io/connorocampo" class="social-media-link" target="_blank" rel="noopener noreferrer"
            ><i class="fab fa-codepen social-media-icon"></i
          ></a>
          <a href="https://www.linkedin.com/in/connorocampo/" class="social-media-link" target="_blank" rel="noopener noreferrer"
            ><i class="fab fa-linkedin-in social-media-icon"></i
          ></a>
          <a href="https://twitter.com/ConnorOcampo" class="social-media-link" target="_blank" rel="noopener noreferrer"
            ><i class="fab fa-twitter social-media-icon"></i
          ></a>

      </section>
      <!-- /sidebar -->
    </div>
    <!-- /main content -->

<?php
    get_footer();
?>