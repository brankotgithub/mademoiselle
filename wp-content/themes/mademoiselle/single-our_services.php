<?php
get_header();
?>

<main>

    <section class="single-service">
                <div class="container">
                      
                    
                    <div class="row">
                        
                        <div class="col-12 mb-4 mb-md-0 col-md-6">
                            <figure class="mb-0">
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt=""/>
                            </figure>
                        </div> 
                        <div class="col-12 col-md-5 ml-auto">
                            <article class="single-service-content">
                                <h2><?php the_title(); ?></h2>
                                <p>
                                    <?php the_content(); ?>
                                </p>
                            </article>
                        </div>
                    </div>
                </div>
            </section>
            <section class="news">
                <div class="container">
                    <h2 class="section-title text-uppercase">Stay Up with the Latest Beauty Trends</h2>
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
                    
                    <div class="row">
                        <?php
                            $counter = 0; // Initialize a counter

                            while ($publishPosts->have_posts() && $counter < 3) {
                            $publishPosts->the_post();
                                // Display the post content or other post-related content here
                            $counter++; // Increment the counter

                        ?>
                        <div class="col-12 col-md-4 mb-4">
                            <article class="news-item animation" data-animation="slide-top">
                                <figure class="mb-0">
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt=""/>
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
                        </div>
                        
                        
                   <?php
                        } // End while loop
                        wp_reset_postdata(); // Reset the post data
                     ?>
                    </div><!--.row end-->
                <?php } // End if condition
                ?>   
                </div>
            </section>
    
    

</main><!--main end-->

<?php
get_footer();
?>