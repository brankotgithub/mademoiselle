<?php

get_header();
?>
<main>
    
    <?php
    // includ lead-section
    get_template_part('/template-part/lead-section');
    
    ?>

  <section class="news">
     <div class="container">
                    

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
                    
                    <h2 class="section-title text-uppercase">Stay Up with the Latest Beauty Trends</h2>
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
                                    <!--<img src="image/news/news-01.png" alt=""/> -->
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
            
    
    
    
    
            <section class="our-team">
                <div class="container">
                    <h2 class="section-title text-uppercase">
                        Trust our professionals
                    </h2>
                    <?php
                        $arg2 = array(
                        'posts_per_page' => -1,
                        'post_type' => 'team_member',
                        'order' => 'ASC',
                        'orderby' => 'date'
                     ); 
                        $teamMember= new WP_Query($arg2);

                        if ($teamMember->have_posts()) {
                        ?>
                    
                    <div class="team-members-slider owl-carousel">
                        
                        <?php
                            while ($teamMember->have_posts()) {
                            $teamMember->the_post();
                        ?> 
                        
                        <article class="team-member">
                            <div class="row align-items-lg-center">
                                <div class="col-12 col-md-5 col-lg-4 offset-lg-1 mb-4 mb-md-0 ">
                                    <figure class="mb-0">
                                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt=""/>
                                    </figure>
                                </div>
                                <div class="col-12  col-md-6 offset-md-1 col-lg-5 col-xl-4">
                                    <aside>
                                        <h2 class="team-member-title text-uppercase"><?php the_title(); ?></h2>
                                        <div class="team-member-bio">
                                            <p> 
                                                <?php the_content(); ?>
                                            </p>
                                        </div>
                                    </aside>
                                </div>
                            </div>
                        </article>
                        
                     <?php
                        } // End while loop
                        wp_reset_postdata(); // Reset the post data
                        ?>
                    </div><!--.row end-->
                    <?php } // End if condition
                    ?>
                </div>
            </section>

        
    </main>  
       
<?php
get_footer();
