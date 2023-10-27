
<?php
// provera da li je index postavljen kao blog page -is home = index.php
//if it true it provide visibility of lead section on the blog page in this case index.php
if (is_home() && get_option('page_for_posts')) {
    $leadTitle = get_field('blog_title', get_option('page_for_posts'));
    $background_image = get_the_post_thumbnail_url(get_option('page_for_posts'), 'full');
} else  {
    
    $background_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
}
?>
<section class="lead-section text-center" style="background-image: linear-gradient(180deg, rgba(0,0,0,0.45) 0%, rgba(0,0,0,0.2) 100%), url(<?php echo $background_image; ?>);">
    <div class="container d-flex flex-wrap align-content-center justify-content-center">
        <h2 class="lead-section-title text-white animation" data-animation="slide-bottom">
            <?php 
               if (is_home()){ 
               echo $leadTitle; 
               } else {
                   the_title();
               }
                           
             ?></h2>
    </div>
</section>
