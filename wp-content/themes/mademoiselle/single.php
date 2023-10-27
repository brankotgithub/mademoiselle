<?php

get_header();
?>

<main>

<?php
    if (have_posts()) {

        while (have_posts()) {
            the_post();

            $featureImage = get_the_post_thumbnail_url(get_the_ID(), 'full');
            ?>
            <section class="single-blog">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-5 mr-auto">
                            <article class="single-blog-header">
                                <div class="single-blog-detail d-flex flex-wrap align-items-end mb-4">
                                    <p class="single-blog-categories">
                                        <?php
                                            $blogCategories = get_the_category(get_the_ID());
                                            /* echo '<pre>';
                                            var_dump ($newsCategories);
                                            echo '</pre>'; founding ID and name of category */

                                            foreach ($blogCategories as $blogCategory) {
                                        ?>
                                        <a href="<?php echo get_category_link($blogCategory->term_id) ?>" class="font-weight-bold d-inline-block"><?php echo $blogCategory->name; ?></a>
                                        <?php
                                    }
                                    ?> 
                                    </p>
                                    
                                    <p class="date-published"><?php echo the_date('j.m.y') ?></p>

                                </div>
                                <h2 class="text-uppercase">
                                    <?php echo the_title(); ?>
                                </h2>
                                <p class="lead single-blog-excerpt">
                                    <?php echo the_excerpt(); ?>
                                </p>
                            </article>
                        </div>
                        <div class="col-12 mb-4 mb-md-0 col-md-6">
                            <figure class="mb-0 single-blog-featured-image">
                                <img src="<?php echo $featureImage; ?>" alt=""/>
                            </figure>
                        </div> 

                    </div>
                    
                    
                    
                    
                    <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-10 col-xl-8 ">
                            <article class="single-blog-content">
                                <?php echo the_content(); ?>
                                
                            </article>
                            
                            <div class="single-blog-tags-wrapper">
                                <p class="single-blog-tags-label">Tags:</p>
                                <div class="single-blog-tags">
                                    <?php
                                    $blogTags = get_the_tags(get_the_ID());
                                    /* echo '<pre>';
                                      var_dump ($blogTags);
                                      echo '</pre>'; */
                                    foreach ($blogTags as $blogTag) {
                                        ?>
                                    
                                    <a href="<?php echo get_category_link($blogTag->term_id) ?>" class="btn btn-light px-4 text-lowercase"><?php echo $blogTag->name; ?></a>
                                    <?php
                                    }
                                    ?> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </section>
           
<?php }
        
            
        get_template_part('/template-parts/pagination');
        
    }
    ?>



        </main>

<?php

get_footer();