<!DOCTYPE html>
<html lang="en">
  <head>
    <title>WP Binge | Learn WordPress</title>
    <!-- Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="WP Binge" />
    <meta name="author" content="https://www.connorocampo.dev" />
    <link rel="shortcut icon" href="/wp-content/themes/wpbinge/assets/images/favicon.png" />

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
        <a href="/"><img src="<?php echo $logo[0] ?>" /></a>  
        <div class="nav-links" id="nav">
          <a href="/page.html" class="selectedLink">Page</a>
          <a href="/archive.html" class="selectedLink">Archive</a>
          <a href="/contact.html" class="selectedLink">Contact</a>
          <button class="nav-btn">
            <i class="fas fa-ellipsis-v toggle-btn" onclick="toggleNav()"></i>
          </button>
        </div>
      </nav>
    </header>
    <!-- /header -->