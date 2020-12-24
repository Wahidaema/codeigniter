<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--Style Sheet-->
    <link rel="stylesheet"href="asset/css/recipe.css">

    <!-- Font Awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Bootstrap Grid System-->
    <link rel="stylesheet"href="asset/css/bootstrap-grid.css">
    <title>Recipes</title>
</head>
<body>
<!--Nabigation-->  
<div class="navbar">
    <nav>
        <div class="logo"><h1 class="">Tinysalt.<span>Studio</span></h1></div>
          <ul>
            <li>
                <a href="index">Home</a>
            </li>
            <li>
                <a href="aboutus">About</a>
            </li>
            <li>
                <a href="recipe">Recipes</a>
            </li>
            <li>
                <a href="contact">Contact</a>
            </li>
            <li>
               <a href="admin">Dashboard</a>
           </li>
          </ul>
    </nav>
 </div>  
<!--Main Section-->

<!--Category Section-->

<!--Post section-->
<div class="post_section">
    <h2 class="text-center">Dessert Section</h2>
    </div>
    <?php
       foreach($dessertrecipe as $fatchdessertrecipe){
             
             ?>
    <div class="my_container">
   
    
        <div class="card">
        
            <div class="card-image">
                <img src="<?php echo base_url().'asset/uploads/'.$fatchdessertrecipe->image;?>"alt="">
            </div>
            <div class="card-content">
                <div class="blog_details">
                  <p class="blog-meta"><?php echo $fatchdessertrecipe->date;?></strong> |  <?php echo $fatchdessertrecipe->postby;?></span></p>
                </div>
                <h2 class="blog-title"><?php echo  substr($fatchdessertrecipe->recipetitle,0,50);?></h2>
                <p><?php echo  substr($fatchdessertrecipe->content,0,250);?></p>
                <div class="blog-cta">
                  <a href="<?php echo site_url('blog/viewviewpage2/'.$fatchdessertrecipe->id)?>" class="button"><?php echo  substr($fatchdessertrecipe->buttoncaption,0,50);?></a>
                </div>
            </div>
         
       </div>
            
              
 </div>  
 <?php
          }
          ?> 
<!--text section-->
<div class="text_section">
    <h2 class="my-text">Easy Meals <span>Forum</span></h2>
</div>
<!--Footer Section-->
<div class="footer_section">
    <div class="footer-main-div">
      <h2>GET IN TOUCH</h2>
        <div class="footer-social-icons">
           <ul>
               <li><a href="https://www.facebook.com/" target="blank"><i class="fa fa-facebook-f"></i></a></li>
               <li><a href="https://www.instagram.com/" target="blank"><i class="fa fa-instagram"></i></a></li>
               <li><a href="https://www.twitter.com/" target="blank"><i class="fa fa-twitter"></i></a></li>
               <li><a href="https://www.youtube.com/" target="blank"><i class="fa fa-youtube"></i></a></li>
               <li><a href="https://www.googleplus.com/" target="blank"><i class="fa fa-google-plus"></i></a></li>
            </ul>
            <p><em>Tiny.Salt © Copyright 2020. All rights reserved</em></p>
        </div>
    </div>
</div>
</body>
</html>