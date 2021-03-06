<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Style Sheet-->
    <link rel="stylesheet"href="<?php echo base_url();?>/asset/css/admincss/adminpanel.css">

    <!-- Javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Font Awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Bootstrap Grid System-->
    <link rel="stylesheet"href="<?php echo base_url();?>/asset/css/admincss/bootstrap-grid.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/asset/code.js">

    <title>admin panel</title>
</head>
    <body>
        
        <!-- Wrapper Start -->
        <div class="wrapper">
            <!-- header-menu Start -->
            <div class="header">
                <div class="header-menu">
                    <div class="title">Tinysalt.<span>Studio</span></div>
                </div>
            </div>
            <!-- header-menu end -->
            <!-- Sidebar Start -->
            <div class="sidebar">
                <div class="sidebar-menu">
                    <center class="profile">
                        <img src="<?php echo base_url();?>/asset/img/user.jpg" alt="">
                        <p>Alex</p>
                    </center>
                    <li class="item">
                            <a href="<?php echo base_url();?>blog" class="menu-btn">
                               <i class="fa fa-home"></i><span>Home</span>
                            </a>
                        </li>

                    <li class="item">
                            <a href="<?php echo base_url();?>user" class="menu-btn">
                               <i class="fa fa-user-circle-o"></i><span>post</span>
                            </a>
                        </li>
                        <li class="item">
                            <a href="<?php echo base_url();?>user/author" class="menu-btn">
                               <i class="fa fa-user-circle-o"></i><span>Author</span>
                            </a>
                    </li>

                    
                        <!--start logout-->
                    <li class="item">
                    <a href="<?php echo site_url('user/logoutauthor');?>" class="menu-btn">
                           <i class="fa fa-sign-out"></i><span>Log Out</span>
                        </a>
                    </li>
                    <!--end logout-->
                    </div>
                </div>
                <!-- Sidbar End -->
            <!-- Main container start -->
            <div class="main-container"style="height:700px;">
                <h2 class="Header-form">Add Post</h2>
                <div class="box"style="height:580px;width:900px;margin-left:50px;">
                    <div class="row">
                        <label>Recipe-Title</label>
                        <input type="text" placeholder="  Enter your message..." id="recipetitle" name="recipetitle"value="<?php echo $viewmaincourse->recipetitle;?>">
                    </div>
                    <div class="row">
                        <label>Post by</label>
                        <input type="text" placeholder="  Enter your message..." id="post-by" name="post-by"value="<?php echo $viewmaincourse->postby;?>">
                    </div>
                    <div class="row">
                        <label>Date</label>
                        <input type="date" placeholder="  Enter your message..." id="input" name="input"value="<?php echo $viewmaincourse->date;?>">
                    </div>
                    <div class="row">
                        <label>Image</label>
                        <input type="file" class="photo"name="image">
                        <?php if($viewmaincourse->image){?>
                        <img width="20%" src="<?php echo site_url('asset/uploads/'.$viewmaincourse->image);?>">
                        <?php }?>
                    </div>
                    <div class="row">
                        <label>Content</label>
                        <input type="text" placeholder="  Enter your message..." id="content" name="content"value="<?php echo $viewmaincourse->content;?>">
                    </div>
                    <div class="row">
                        <label>Button-Caption</label>
                        <input type="text" placeholder="  Enter your message..." id="button-caption" name="button-caption"value="<?php echo $viewmaincourse->buttoncaption;?>">
                    </div>
                </div>
            </div>
              <!-- Main container end -->
        </div> 
         <!-- Wrapper end -->
    </body>
    </html>