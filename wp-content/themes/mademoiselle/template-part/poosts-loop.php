<?php


get_header();
?>
<main> 
   
<section class="news">
                <div class="container">
                    <?php 
                     if (have_posts()) { ?>
                   
                   
                    <div class="row">
                     <?php    
                     while (have_posts()) {
                    the_post();
                   
                    ?>
                        <div class="col-12 col-md-4 mb-4">
                            <article class="news-item animation" data-animation="slide-top">
                                <figure class="mb-0">
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt=""/>
                                </figure>
                                <div class="news-item-content">
                                    <p class="date-published"><?php the_date(); ?></p>
                                    <h4 class="news-item-title">
                                        <a href="<?php echo the_permalink(); ?>">
                                             <?php the_title(); ?>
                                        </a> 
                                    </h4>
                                </div>
                            </article>
                        </div>
                <?php }
                ?>
                    
                 
           
        
            <div class="container">
                <?php the_posts_pagination(array(
                        'mid_size'  => 2,
                        'prev_text' => '&lang;',
                        'next_text' => '&rang;'
                    
                )); ?>
            </div>
            
       
    
<?php } else { ?>
        <section class="news-section">
            <div class="container">
                <div class="jumbotron"> 
                    <h3> there are no posts to show</h3>
                </div>    
            </div><!--.container end-->
        </section><!--.news-section end-->

        <?php
    }
    ?>

</main>
 <?php
    get_footer();
    ?>  