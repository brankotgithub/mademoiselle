<?php
/*
 * Template Name: Page for services
 */


get_header();
?>
<main>

    <?php
    // includ lead-section
    get_template_part('/template-part/lead-section');
    ?>

  
            <section class="services">
                <div class="container">
                    <h2 class="section-title text-uppercase">Services</h2>
                    
                    <?php
                        $arg2 = array(
                        'posts_per_page' => -1,
                        'post_type' => 'our_services',
                        'order' => 'ASC',
                        'orderby' => 'date'
                     ); 
                        $services= new WP_Query($arg2);

                        if ($services->have_posts()) {
                        ?>
                    
                     <?php
                                while ($services->have_posts()) {
                                $services->the_post();
    
                                // Get the post ID
                                $post_id = get_the_ID();
    
                                // Check if the post ID is even
                                if ($post_id % 2 !== 0) {
                                // Display the content for odd posts
                             ?>
                    <article class="service-item">
                        <div class="row align-items-center no-gutters">
                            
                            <div class="col-md-6 service-item-image">
                                <figure class="mb-0">
                                    <a href="<?php the_permalink(); ?>" class="d-block">
                                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt=""/>
                                    </a>
                                </figure>
                            </div>
                            <div class="col-md-6 service-item-content">
                                <aside>
                                    <h3 class='mb-5 animation' data-animation="slide-left">
                                        <a href="<?php the_permalink(); ?>" class="d-block"><?php the_title(); ?></a>
                                    </h3>
                                    <a href="<?php the_permalink(); ?>" class="text-uppercase btn btn-outline-dark animation" data-animation="slide-right">learn more</a>
                                </aside>
                            </div>
                        </div>
                    </article>
                    
                    <?php
                                }elseif ($post_id % 2 == 0){
                            
                            ?>
                    
                    <article class="service-item">
                        <div class="row align-items-center no-gutters">
                            
                            <div class="col-md-6 service-item-image">
                                <figure class="mb-0">
                                    <a href="<?php the_permalink(); ?>" class="d-block">
                                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt=""/>
                                    </a>
                                </figure>
                            </div>
                            <div class="col-md-6 service-item-content">
                                <aside>
                                    <h3 class='mb-5 animation' data-animation="slide-left">
                                        <a href="<?php the_permalink(); ?>" class="d-block"><?php the_title(); ?></a>
                                    </h3>
                                    <a href="<?php the_permalink(); ?>" class="text-uppercase btn btn-outline-dark animation" data-animation="slide-right">learn more</a>                                </aside>
                            </div>
                        </div>
                    </article>
                    <?php
                        } // End while loop
                        wp_reset_postdata(); // Reset the post data
                    ?>
                    
                                <?php }} // End if condition
                    ?>
                </div>
            </section>
  
    
 </main>

    <?php
    get_footer();
    ?>   