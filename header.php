<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta -->
    <title><?php the_title(); ?> | Learn WordPress</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="WP Binge | Learn WordPress" />
    <meta name="author" content="https://www.connorocampo.dev" />
    <link rel="shortcut icon" href="/wp-content/themes/wpbinge/assets/images/favicon.png" />

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-159291549-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-159291549-1');
  </script>

    <?php
      wp_head();
    ?>
  </head>

  <body>
    <header>
      <nav class="nav">
        <?php
          if (function_exists('the_custom_logo')) {
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id);
          }
          ?>
        <a href="/"><img src="<?php echo $logo[0] ?>" alt="WP Binge Logo" /></a>

        <?php
            wp_nav_menu(
              array(
                'menu' => 'primary',
                'container' => '',
                'theme_location' => 'primary',
                'items_wrap' => '<ul id="nav" class="nav-links">%3$s</ul>'
              )
            );
        ?>

        <button class="nav-btn" aria-label="mobile menu button">
          <i class="fas fa-ellipsis-v toggle-btn" onclick="toggleNav()"></i>
        </button>
      </nav>
    </header>
    <!-- /header -->