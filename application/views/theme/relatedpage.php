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
                foreach($relatedpage as $fatchrelatedpage){
             
             ?>
            <div class="col-md-4">
                <div class="single-recipe">
                    <p class="blog-meta"><h6><?php echo  substr($fatchrelatedpage->postby,0,50);?></h6><span><h6><?php echo  substr($fatchrelatedpage->date,0,50);?></h6></span></p>
                    <img src="<?php echo base_url().'asset/uploads/'.$fatchrelatedpage->image;?>" class="image_responsive">
                    <h5><strong><?php echo  substr($fatchrelatedpage->recipetitle,0,50);?></strong></h5>
                    <p class="blog-text"><?php echo  substr($fatchrelatedpage->content,0,50);?></p>
                    <p><a href="<?php echo site_url('blog/viewviewpage3/'.$fatchrelatedpage->id)?>" class="read-more-btn"><?php echo  substr($fatchrelatedpage->buttoncaption,0,50);?></a></p>
                </div>
            </div>
            <?php
          }
          ?>
              
        </div>
    </div>
</div>

<!--Post section-->
<div class="post_section">
    <h2 class="text-center">Dessert Section</h2>
    <div class="my_container">
        <div class="card">
            <div class="card-image">
                <img src="asset/img/moltencake.jpg"alt="">
            </div>
            <div class="card-content">
                <div class="blog_details">
                  <p class="blog-meta">by Matilda Sienna<span>June 6, 2019</span></p>
                </div>
                <h2 class="blog-title">Molten Cake Pastry</h2>
                <p>These small but sophisticated blender cakes are not only eye-catching, but full of bright flavor.
                The rosemary syrup glaze is a must to complete the flavor profile.These small but sophisticated ble
                nder cakes are not only eye-catching,but full of bright flavor.The rosemary syrup glaze is a must to
                complete the flavor profile.</p>
                <div class="blog-cta">
                  <a href="viewpage7" class="button">Read more</a>
                </div>
            </div>
        </div>  
    </div>

    <div class="my_container">
        <div class="card">
            <div class="card-image">
                <img src="asset/img/byh.jpg"alt="">
            </div>
            <div class="card-content">
                <div class="blog_details">
                 <p class="blog-meta">by Abigail Zoe<span>September 17, 2019</span></p>
                </div>
               <h2 class="blog-title">Almond Pastry Cookies</h2>
               <p>These small but sophisticated blender cakes are not only eye-catching, but full of bright flavor.
                The rosemary syrup glaze is a must to complete the flavor profile.These small but sophisticated ble
                nder cakes are not only eye-catching,but full of bright flavor.The rosemary syrup glaze is a must to
                complete the flavor profile.</p>
              <div class="blog-cta">
                <a href="viewpage9" class="button">Read more</a>
              </div>
            </div>
        </div>  
    </div>
</div>
<!--More Foods-->
<div class="extra_section">
    <div class="container">
        <h2 class="text-center">Related Posts</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="each-recipe">
                   <p class="blog-meta">by Annabelle Elsie<span>December 10, 2019</span></p>
                   <img src="asset/img/avocado.jpg" class="image_responsive">
                   <h5><strong>Avocado Toast</strong></h5>
                   <p class="each-text">I have a heart of love and an interest of lorem ipsum and mauris
                    neque quam blog.I want to share my world with you.Praesent tincidunt neque quam blog.
                    I want to share my world with you.Praesent tincidunt type.</p>
                    <p><a href="viewpage10" class="read-more-btn">Read more</a></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="each-recipe">
                   <p class="blog-meta">by Amelie Eliza<span>February 23, 2020</span></p>
                   <img src="asset/img/blueberry.jpg" class="image_responsive">
                   <h5><strong>Blueberry Smoothie</strong></h5>
                   <p class="each-text">I have a heart of love and an interest of lorem ipsum and mauris
                    neque quam blog.I want to share my world with you.Praesent tincidunt neque quam blog.
                    I want to share my world with you.Praesent tincidunt type.</p>
                    <p><a href="viewpage11" class="read-more-btn">Read more</a></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="each-recipe">
                  <p class="blog-meta">by Georgia Mya<span>March 19, 2020</span></p>
                  <img src="asset/img/passtries.jpg" class="image_responsive">
                  <h5><strong>French Pastries</strong></h5>
                  <p class="each-text">I have a heart of love and an interest of lorem ipsum and mauris
                  neque quam blog.I want to share my world with you.Praesent tincidunt neque quam blog.
                  I want to share my world with you.Praesent tincidunt type.</p>
                  <p><a href="viewpage12" class="read-more-btn">Read more</a></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="each-recipe">
                  <p class="blog-meta">by Anna Rose<span>April 11, 2020</span></p>
                  <img src="asset/img/burger2-1024x682.jpg" class="image_responsive">
                  <h5><strong>Vegetables Cutlet</strong></h5>
                  <p class="each-text">I have a heart of love and an interest of lorem ipsum and mauris
                  neque quam blog.I want to share my world with you.Praesent tincidunt neque quam blog.
                  I want to share my world with you.Praesent tincidunt type.</p>
                  <p><a href="viewpage13" class="read-more-btn">Read more</a></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="each-recipe">
                  <p class="blog-meta">by Elizabeth Luna<span>May 5, 2020</span></p>
                  <img src="asset/img/indian-butter-chicken-SBDF03902.jpg" class="image_responsive">
                  <h5><strong>Indian Chicken Curry</strong></h5>
                  <p class="each-text">I have a heart of love and an interest of lorem ipsum and mauris
                  neque quam blog.I want to share my world with you.Praesent tincidunt neque quam blog.
                  I want to share my world with you.Praesent tincidunt type.</p>
                  <p><a href="viewpage14" class="read-more-btn">Read more</a></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="each-recipe">
                  <p class="blog-meta">by Maria Heidi<span>June 11, 2020</span></p>
                  <img src="asset/img/285_Crop_720_480.jpg" class="image_responsive">
                  <h5><strong>Easy Chessy Fondue</strong></h5>
                  <p class="each-text">I have a heart of love and an interest of lorem ipsum and mauris
                  neque quam blog.I want to share my world with you.Praesent tincidunt neque quam blog.
                  I want to share my world with you.Praesent tincidunt type.</p>
                  <p><a href="viewpage15" class="read-more-btn">Read more</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
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