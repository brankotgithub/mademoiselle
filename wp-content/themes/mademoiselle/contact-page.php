<?php
/*
 * Template Name: Contact Page
 */

get_header();
?>
<main>
    <section class="contact-us position-relative">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mb-4 mb-md-0">
                            <article class="contact-us-form pr-lg-4 pr-xl-0">
                                <h2 class="section-title text-uppercase">
                                    <?php the_field('form_title');?>
                                </h2>

                                <form class="contact-form" method="post" action="">
                                    <?php the_field('form_field'); ?> 
                                </form>
                            </article>
                        </div>
                        <div class="col-lg-6 col-xl-5 contact-us-map">
                            <div class="embed-responsive embed-responsive-1by1 h-100">
                                <?php the_field('contact_map'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="contact-us-data bg-primary">
                <div class="container">
                    <p><?php the_field('adresa'); ?></p>
                    <p><a href="tel:<?php the_field('telefon'); ?>"><?php the_field('telefon'); ?></a></p>
                    <p><a href="mailto:<?php the_field('mail'); ?>"><?php the_field('mail'); ?></a></p>
                </div>
            </section>
</main>






<?php
get_footer();
?>