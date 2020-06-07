        <hr />
        
        <div class="post">
            <a href="<?php the_permalink(); ?>" target="_blank">
            <img
                src="<?php the_post_thumbnail_url('thumbnail'); ?>"
                alt=""
                class="featured-image"
            />
            <h2 class="blog-post-title">
                <?php the_title(); ?></a>
            </h2>
            <span class="date"><?php the_date(); ?></span>
            
            <?php the_tags('<span class="tag"><i class="fas fa-tag"></i>', '</span><span class="tag"><i class="fas fa-tag"></i>', '</span>'); ?>

            <?php
                the_excerpt();
            ?>
            <a href="<?php the_permalink(); ?>" class="read-more-link" target="_blank">Read More</a>
        </div>
        <!-- /post -->
        
    
