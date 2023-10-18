<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html <?php bloginfo("language")?>>
    <head>
        <title><?php 
        bloginfo("name");
        wp_title(' | ', true, 'left');/* must have code  support in function.php*/
        ?>
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Brank Teodorovic">
        <meta name="description" content="Mademoiselle is custom theme for advertizing beaty services">
        <meta name="keywords" content="clients beauty madam makeup freetime">


        <!--ios compatibility-->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-title" content="<?php bloginfo("name")?>">
        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/Fronted/apple-icon-144x144.png">


        <!--Android compatibility-->

        <meta name="mobile-web-app-capable" content="yes">
        <meta name="application-name" content="<?php bloginfo("name")?>">
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/Fronted/android-icon-192x192.png">


        <!--CSS FILES
        
        <link href="<?php /*echo get_template_directory_uri(); ?>/Fronted/css/owl.carousel.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo get_template_directory_uri(); */?>/Fronted/css/theme.css" rel="stylesheet" type="text/css"/>-->

        <?php
            wp_head();
        ?>

    </head>
    <body <?php body_class()?>>

        <header class="bg-white fixed-top">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light align-items-center px-0 py-3">
                    <?php 
                    if (has_custom_logo()){
                    the_custom_logo();}
                        else{?>
                             <a class="navbar-brand d-flex align-items-center" href="<?php echo home_url();?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/Frontend/img/logo.png" alt=""/>
                    </a>
                    <?php
                        } 
                    ?>
                    
                    <button class="navbar-toggler pt-2" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>

                    <div class="collapse navbar-collapse" id="main-menu">
                        
                        <?php 
                            
                            $menuLocation =get_nav_menu_locations();
                            //var_dump($menuLocation);
                            $headerManuID =$menuLocation['header-menu'];
                            $topMenuItems =wp_get_nav_menu_items($headerManuID);
                            /*list of menu items parametars - searching for ID, perents ID.....
                             * echo '<pre>';
                            var_dump ($topMenuItems);
                            echo '</pre>';
                             *
                             */     
                            
                            if ($topMenuItems) {?>
                                
                                 <ul class="navbar-nav ml-md-auto">
                                    
                                     <?php                                     
                                        foreach ($topMenuItems as $topMenuItem) {
                                            
                                            //active class
                                                $activeClass = '';
                                                $activeClassSubMenu = '';
                                                if ($topMenuItem->url == get_permalink()) {
                                                    $activeClass = 'active';
                                                    
                                                }
                                            
                                            
                                            //top level menu
                                            
                                            if($topMenuItem->menu_item_parent==0) {
                                                
                                                //start second level menu 
                                                $topItemId = $topMenuItem->ID;
                                                $subMenuItems = array();
                                                    
                                                    foreach ($topMenuItems as $subMenuItem) {
                                                        
                                                        //active sub menu class
                                                                                    
                                                                                        if ($subMenuItem->url == get_permalink()) {
                                                                                           
                                                                                        $activeClassSubMenu = 'active';
                                                                                    } 
                                                                            
                                                        
                                                        //insert item in subMenu
                                                            if ($subMenuItem->menu_item_parent == $topItemId ) {
                                                                $subMenuItems[] = $subMenuItem;
                                                            }
                                                        
                                                    }
                                                
                                                
                                                ?>    
                            
                            <li class="nav-item ">
                                <a class="nav-link <?php echo $activeClass; ?>" href="<?php echo $topMenuItem->url?>"><?php echo $topMenuItem->title?> <span class="sr-only">(current)</span></a>
                                <?php
                                    // if (empty($subMenuItems)) echo "b" /*  umesto b moye awesome ikonica i ubaciti u a element*/
                                ?>
                                <?php
                                                               if (!empty($subMenuItems)) {?>
                                                                    
                                                                    <ul  >
                                                                        <?php
                                                                              foreach ($subMenuItems as $subItem) {
                                                                                  
                                                            
                                                                                  ?>
                                                                                                                                
                                                                        <li class="nav-item ">
                                                                            
                                                                            <a class="nav-link <?php echo $activeClassSubMenu?>"  href="<?php echo $subItem->url?>"> <?php echo $subItem->title?> </a>
                                                                        </li>                                                   
                                                                        
                                                                        
                                                                      
                                                                    </ul>
                                                             <?php  }
                                                    
                                                    ?>
                                                
                                                </li>
                                    <?php
                                    }}
                                
                            }}
                            ?>
                        
                                
                            <!--</li>
                            <li class="nav-item">
                                <a class="nav-link" href="services.html">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="blog.html">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li>
                        </ul>-->
                    </div>
                </nav>
            </div>
        </header>

