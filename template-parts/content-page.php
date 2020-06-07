<section class="page-container">
    <div class="page">

    <img
        src="<?php the_post_thumbnail_url('thumbnail'); ?>"
        alt=""
        class="featured-image"
    />
    

    <h1>
        <?php the_title(); ?>
    </h1>
    
    <?php
       the_content();
    ?>
 
 </div>
</section>