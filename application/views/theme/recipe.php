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
                <a href="<?php echo base_url();?>index">Home</a>
            </li>
            <li>
                <a href="<?php echo base_url();?>aboutus">About</a>
            </li>
            <li>
                <a href="<?php echo base_url();?>recipe">Recipes</a>
            </li>
            <li>
                <a href="<?php echo base_url();?>contact">Contact</a>
            </li>
            <li>
               <a href="<?php echo base_url();?>admin">Dashboard</a>
           </li>
          </ul>
    </nav>
 </div>  
<!--Main Section-->
<div class="main_section">
    <div class="main_text">
        <h1>Recipe Index</h1>
    </div>
</div>
<!--Category Section-->
<div class="category_section">
    <div class="container">
        <h2 class="text-center">Main Course</h2>
        <div class="row">
        <?php
                foreach($recipe as $fatchrecipe){
             
             ?>
            <div class="col-md-4">
                <div class="single-recipe">
                    <p class="blog-meta"><?php echo $fatchrecipe->date;?></strong> |  <?php echo $fatchrecipe->postby;?></span></p>
                    <img src="<?php echo base_url().'asset/uploads/'.$fatchrecipe->image;?>" class="image_responsive">
                    <h5><strong><?php echo  substr($fatchrecipe->recipetitle,0,50);?></strong></h5>
                    <p class="blog-text"><?php echo  substr($fatchrecipe->content,0,190);?>.</p>
                    <p><a href="<?php echo site_url('blog/viewviewpage1/'.$fatchrecipe->id)?>" class="read-more-btn"><?php echo  substr($fatchrecipe->buttoncaption,0,250);?></a></p>
                </div>
            </div>
            <?php
          }
          ?>
              
        </div>
    </div>
</div>
<!--Post section-->

<div class="another_section">
    <div class="another_text">
            <h2>Cooking is about passion,so it may look slightly<br>
            temperamental in a way that it's too assertive to the<br>
            naked eye.</h2>
            <p>GORDON RAMSAY</p>
    </div>
</div>
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