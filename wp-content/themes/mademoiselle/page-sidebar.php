<?php
/*
*Template Name: Page Width Sidebar
*/
get_header();
?>
<main>
    
    <?php
    // includ lead-section
    get_template_part('/template-part/lead-section');
    
    ?>
            <?php

                if ( have_posts() ) :
                while ( have_posts() ) : the_post();
             ?>
            <section class="page-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-8 mb-4 mb-md-0">
                            <article class="page-content">
                                <!-- display page content using the_content() -->
                                <?php echo the_content()?>

                            </article>
                        </div>

                        <div class="col-12 col-md-4">
                            <aside class="page-sidebar">
                                <?php get_sidebar(); ?>
                                
                                <?php
                                $arg = array(
                                'posts_per_page' => -1,
                                'post_type' => 'post',
                                'order' => 'DESC',
                                'orderby' => 'date'
                                ); 
                                $publishPosts= new WP_Query($arg);

                                if ($publishPosts->have_posts()) {
                                ?>
                                <div class="widget">
                                     <?php
                                        $counter = 0; // Initialize a counter

                                        while ($publishPosts->have_posts() && $counter < 3) {
                                        $publishPosts->the_post();
                                        // Display the post content or other post-related content here
                                        $counter++; // Increment the counter

                                    ?>
                                    <article class="news-item animation mb-4" data-animation="slide-top">
                                        <figure class="mb-0">
                                            <img  src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt=""/>
                                        </figure>
                                        <div class="news-item-content">
                                            <p class="date-published"><?php echo get_the_date();?></p>
                                            <h4 class="news-item-title">
                                                <a href="<?php echo the_permalink(); ?>">
                                                    <?php the_title(); ?>
                                                </a> 
                                            </h4>
                                        </div>
                                    </article>
                                     <?php
                                        } // End while loop
                                        wp_reset_postdata(); // Reset the post data
                                      ?>
                                        </div><!--.row end-->
                                <?php } // End if condition
                                ?>   
                                
                            
                            </aside>
                        </div>
                    </div> 
                </div>
            </section>
            <?php
            endwhile;
            endif;
 
            ?>
    
</main>

<?php

get_footer();