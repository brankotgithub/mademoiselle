<footer class="text-center">
            <div class="container">
                 <?php 
               $menuLocations =get_nav_menu_locations();
               $socialMenuID = $menuLocations['social-menu'];// social-menu is key which we create in function.php
               $socialMenuItems = wp_get_nav_menu_items($socialMenuID);
               
               //var_dump($socialMenuItems);
               
               if ($socialMenuItems) {?>
                    <nav class="social  mb-4">
                       <?php 
                       foreach ($socialMenuItems as $socialItem) {
                            if ($socialItem->menu_item_parent==0){?>
                                <a href="<?php echo $socialItem->url ;?>" class="fab fa-<?php echo strtolower($socialItem->title) ; if($socialItem->title=="Facebook"){echo "-f";} ?>"></a>

                            
                        <?php   
                       }}
                       
                       ?>
                       </nav>
                <?php
               }
               ?>
                
                
                
               <!-- it was before customizing
                    <a class="fab fa-facebook-f" href="http://facebook.com" target="_blank"></a>
                    <a class="fab fa-twitter" href="http://twitter.com" target="_blank"></a>
                    <a class="fab fa-instagram" href="http://instagram.com" target="_blank"></a>
                </nav>-->
                <p class="copyright">
                    <!--Copyright &copy; 2019 <a href="index.html">Mademoiselle</a>-->
                    Copyright &copy; <?php echo date ('Y');?> <a href="<?php echo home_url();?>"><?php bloginfo('name'); ?></a>
                </p>
            </div>
        </footer>

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>

        <!--font awesome icons-->
        <script src="https://kit.fontawesome.com/85bd05dd45.js"></script>
        
        <!--owl carousel -->
        <script src="js/owl.carousel.min.js" type="text/javascript"></script>
        <!-- Custom JS-->
        <script src="js/main.js" type="text/javascript"></script>
        
        <?php
            wp_footer();
        ?>
    </body>
</html>