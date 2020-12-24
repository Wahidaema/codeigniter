<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--Style Sheet-->
    <link rel="stylesheet"href="asset/css/contact.css">

    <!-- Font Awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Bootstrap Grid System-->
    <link rel="stylesheet"href="asset/css/bootstrap-grid.css">
    <title>Contact Form</title>
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
    <div class="contact-form">
        <div class="main_text">
            <h1>Say Hello</h1>
            <p>We are always ready to serve you!</p>
        </div>
        <form id="contact-form" action="<?php echo site_url('blog/savemesg')?>" method="post">
            <input name="name" type="text" class="form-control" placeholder=" Your Name"  required><br>
            <input name="email" type="email" class="form-control" placeholder=" Your E-mail" required><br>
            <textarea name="message" class="form-control" placeholder=" Type your message..."  required></textarea><br>
            <input type="submit" name="submit"class="form-control submit" onclick="alert('Successfully Done !')" value="Send Message">
        </form>
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
    
</body>
</html>