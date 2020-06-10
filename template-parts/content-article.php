<hr />
        
    <div class="post">
        <?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            } 
        ?>

        <!-- <img
            src="<?php the_post_thumbnail_url('thumbnail'); ?>"
            class="featured-image"
        /> -->
        <h2 class="blog-post-title">
            <?php the_title(); ?>
        </h2>
        <span class="date"><?php the_date(); ?></span>
        
        <?php the_tags('<span class="tag"><i class="fas fa-tag"></i>', '</span><span class="tag"><i class="fas fa-tag"></i>', '</span>'); ?>

        <?php
            the_content();
        ?>
    </div>
    <!-- /post -->
        
    
