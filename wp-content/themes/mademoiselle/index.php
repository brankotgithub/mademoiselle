<?php


get_header();
?>
<main>
    
 <?php
    // includ lead-section
    get_template_part('/template-part/lead-section');
    ?>
    <?php
// includ posts loop before we made the code from poosts loop was in   index page
    get_template_part('/template-part/poosts-loop');
    ?>