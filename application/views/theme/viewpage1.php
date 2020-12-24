<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--Style Sheet-->
    <link rel="stylesheet"href="<?php echo base_url();?>/asset/css/style1.css">

    <!-- Font Awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Bootstrap Grid System-->
    <link rel="stylesheet"href="<?php echo base_url();?>/asset/css/bootstrap-grid.css">
    <title>view page</title>
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
<!--view page-->
<div class="view_section">
    <h1 class="<?php echo $viewviewpage1->recipetitle;?>"></h1>
    <small>by <strong><?php echo $viewviewpage1->date;?></strong> |  <?php echo $viewviewpage1->postby;?></small><br>
    <div class="container">
        <img src="<?php echo base_url().'asset/uploads/'.$viewviewpage1->image;?>" alt="" style="  width:100%;">
    </div>
    <div class="content"style="padding-left: 60px;" >
            <h2>Ingredients</h2>
            <p class="text" style="line-height: 28px;"><?php echo $viewviewpage1->content;?></p>
            <h2>Description</h2>
            <p class="text" style="line-height: 28px;"><?php echo $viewviewpage1->content;?></p>
    </div>
    <div class="button_section">
        <div class="container1">
        
        <a style="margin-left:-1100px;" href="<?php echo site_url('blog/like_recipe/'.$viewviewpage1->id.'/'.$viewviewpage1->like_post)?>">
            <button class="btnOne"><i class="fa fa-thumbs-up"></i>
            <?php echo $viewviewpage1->like_post; ?>Like</button>
        </a>
        </div>
    </div>
</div>
    <!--Footer Section-->
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
</body>
</html>