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
            <a href="#" class="tag tag-yellow"
                ><i class="fas fa-tag"></i> Web Hosting</a
            >
            <a href="#" class="tag tag-aqua"
                ><i class="fas fa-tag"></i> Opinion</a
            >
            <?php
                the_excerpt();
            ?>
            <a href="<?php the_permalink(); ?>" class="read-more-link" target="_blank">Read More</a>
        </div>
        <!-- /post -->
        
    
