<?php

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