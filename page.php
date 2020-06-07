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
        <div class="search-box">
          <input type="text" placeholder="" class="search-input" />
        </div>
        <button type="submit" class="search-button">
          <i class="fas fa-search"></i>
        </button>
        <h2 class="sidebar-header">About The Blog</h2>
        <img
          src="http://place-puppy.com/280x200"
          alt=""
          class="sidebar-about-img"
        />
        <p>
          Life finds a way. Did he just throw my cat out of the window? You know
          what? It is beets. I've crashed into a beet truck. Jaguar shark! So
          tell me - does it really exist? Is this my espresso machine? Wh-what
          is-h-how did you get my espresso machine? I was part of something
          special.
        </p>
        <h2 class="sidebar-header">Recent Posts</h2>
        <ul>
          <li>
            <a href="#" class="sidebar-recent-post"
              >My dad once told me, laugh and the world laughs with you.</a
            >
          </li>
          <li>
            <a href="#" class="sidebar-recent-post"
              >My dad once told me, laugh and the world laughs with you.</a
            >
          </li>
          <li>
            <a href="#" class="sidebar-recent-post"
              >My dad once told me, laugh and the world laughs with you.</a
            >
          </li>
        </ul>
        <h2 class="sidebar-header">Tags</h2>
        <a href="#" class="tag tag-orange"><i class="fas fa-tag"></i> SEO</a>
        <a href="#" class="tag tag-blue"
          ><i class="fas fa-tag"></i> WordPress Development</a
        >
        <a href="#" class="tag tag-yellow"
          ><i class="fas fa-tag"></i> Reviews</a
        >
        <a href="#" class="tag tag-hotpink"
          ><i class="fas fa-tag"></i> Plugins</a
        >
        <a href="#" class="tag tag-blue-primary"
          ><i class="fas fa-tag"></i> Opinion</a
        >
        <a href="#" class="tag tag-blue-tertiary"
          ><i class="fas fa-tag"></i> Recommended Tools</a
        >
        <h2 class="sidebar-header">Social Media</h2>
        <a href="#" class="social-media-link"
          ><i class="fab fa-github social-media-icon"></i
        ></a>
        <a href="#" class="social-media-link"
          ><i class="fab fa-codepen social-media-icon"></i
        ></a>
        <a href="#" class="social-media-link"
          ><i class="fab fa-linkedin-in social-media-icon"></i
        ></a>
        <a href="#" class="social-media-link"
          ><i class="fab fa-twitter social-media-icon"></i
        ></a>
      </section>
      <!-- /sidebar -->
    </div>
    <!-- /main content -->

<?php
    get_footer();
?>