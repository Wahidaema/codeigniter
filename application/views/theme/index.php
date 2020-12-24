<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--Style Sheet-->
    <link rel="stylesheet"href="asset/css/homepage.css">

    <!-- Font Awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Bootstrap Grid System-->
    <link rel="stylesheet"href="asset/css/bootstrap-grid.css">
    <title>Food blog</title>
</head>
<body>
<?php
                foreach($fetchhdr as $hdr){
                }
                ?>
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
<div class="main_section"img="<?php echo base_url().'asset/uploads/'.$hdr->background;?>">
    <div class="main_text">
        <h1><?php echo $hdr->heading;?></h1>
        <p><strong><?php echo $hdr->paragraph;?></strong></p>
        <a href="<?php echo base_url();?>user" class="btn_dark margin_top"><?php echo $hdr->buttoncaption;?></a>
    </div>
</div>

<!--Category Section-->
<div class="category_section">
    <div class="container">
        <h2 class="text-center">Main Course</h2>
        <div class="row">
        <?php
                foreach($recipe_recent as $rfp){
             
             ?>
            <div class="col-md-4">
                <div class="single-recipe">
                    <p class="blog-meta"><?php echo $rfp->date;?></strong> |  <?php echo $rfp->postby;?></span></p>
                    <img src=<?php echo base_url().'asset/uploads/'.$rfp->image;?> class="image_responsive">
                    <h5><strong><?php echo  substr($rfp->recipetitle,0,50);?></strong></h5>
                    <p class="blog-text"><?php echo  substr($rfp->content,0,190);?>.</p>
                    <p><a href="<?php echo site_url('blog/viewviewpage1/'.$rfp->id)?>" class="read-more-btn">Read more</a></p>
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
                <img src="asset/img/veganes-tiramisu.jpg"alt="">
            </div>
            <div class="card-content">
                <div class="blog_details">
                  <p class="blog-meta">by Admin<span>2020-12-22</span></p>
                </div>
                <h2 class="blog-title">Chocolate Mousse</h2>
                <p>These small but sophisticated blender cakes are not only eye-catching, but full of bright flavor.
                The rosemary syrup glaze is a must to complete the flavor profile.These small but sophisticated ble
                nder cakes are not only eye-catching,but full of bright flavor.The rosemary syrup glaze is a must to
                complete the flavor profile.</p>
                <div class="blog-cta">
                </div>
            </div>
        </div>  
    </div>
    <div class="my_container">
        <div class="card">
            <div class="card-image">
                <img src="asset/img/rose-syrup-ice-tea.jpg"alt="">
            </div>
            <div class="card-content">
                <div class="blog_details">
                 <p class="blog-meta">by Admin<span>2020-12-12</span></p>
                </div>
               <h2 class="blog-title">Red Strawberry Smoothie</h2>
               <p>These small but sophisticated blender cakes are not only eye-catching, but full of bright flavor.
                The rosemary syrup glaze is a must to complete the flavor profile.These small but sophisticated ble
                nder cakes are not only eye-catching,but full of bright flavor.The rosemary syrup glaze is a must to
                complete the flavor profile.</p>
               <div class="blog-cta">
               </div>
            </div>
        </div>  
    </div>
    <div class="my_container">
        <div class="card">
            <div class="card-image">
                <img src="asset/img/delish-friedicecream-072-1587757338.jpg"alt="">
            </div>
            <div class="card-content">
                <div class="blog_details">
                 <p class="blog-meta">by Admin<span>2020-12-08</span></p>
                </div>
               <h2 class="blog-title">Molten Cake Pastry</h2>
               <p>These small but sophisticated blender cakes are not only eye-catching, but full of bright flavor.
                The rosemary syrup glaze is a must to complete the flavor profile.These small but sophisticated ble
                nder cakes are not only eye-catching,but full of bright flavor.The rosemary syrup glaze is a must to
                complete the flavor profile.</p>
              <div class="blog-cta">
              </div>
            </div>
        </div>  
    </div>
</div>
<!--More Foods-->
<div class="extra_section">
    <div class="container">
        <h2 class="text-center">popular Posts</h2>
        <div class="row">
        <?php
                foreach($popularpost as $pp){
             
             ?>
                  <div class="col-md-4">
                <div class="single-recipe">
                    <p class="blog-meta"><?php echo $pp->date;?></strong> |  <?php echo $pp->postby;?></span></p>
                    <img src=<?php echo base_url().'asset/uploads/'.$pp->image;?> class="image_responsive">
                    <h5><strong><?php echo  substr($pp->recipetitle,0,50);?></strong></h5>
                    <p class="blog-text"><?php echo  substr($pp->content,0,190);?>.</p>
                    <p><a href="<?php echo site_url('blog/viewviewpage1/'.$pp->id)?>" class="read-more-btn">Read more</a></p>
                </div>
            </div>
            <?php
          }
          ?>
    </div>
</div>
    <!--About Section-->
    <div class="about_section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="image_background">
                        <img src="asset/img/user.jpg"class="image_responsive">
                    </div>
                </div>
                <div class="col-md-9">
                    <h4><b>I am Who I am!</b></h4>
                    <p>Just me,myself and I,exploring the universe of unknownment.
                    I have a heart of love and an interest of lorem ipsum and mauris
                    neque quam blog.I want to share my world with you praesent incidunt
                    sed tellus ut returm.Sed vitae justo condimentum,porta lectus,ultricies
                    congue gravida diam non fringilla.</p>
                    <a href="aboutsingle" class="btn_dark margin_top">Know More</a>
                </div>
            </div>
        </div>
    </div>
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