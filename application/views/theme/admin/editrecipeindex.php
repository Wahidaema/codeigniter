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
                 <!--start header-->
                 <li class="item">
                            <a href="<?php echo base_url();?>blog" class="menu-btn">
                               <i class="fa fa-home"></i><span>Home</span>
                            </a>
                        </li>
                <li class="item">
                <a href="<?php echo base_url();?>/admin" class="menu-btn">
                   <i class="fa fa-book reader"></i><span>Header</span>
                </a>
                </li>
               <!--end header-->

                    <!--start recipe section-->
                           
                <li class="item" id="Recipe">
                    <a href="#Recipe" class="menu-btn">
                        <i class="fa fa-history"></i><span>Recipe<i class="fa fa-chevron-down drop-down"></i></span>
                    </a>
                    <div class="sub-menu">
                        <a href="<?php echo base_url();?>/recipeindex">
                            <i class="fa fa-cart-plus" aria-hidden="true"></i><span>Recipe Index</span>
                        </a>  
                        <a href="<?php echo base_url();?>/maincourse">
			                <i class="fa fa-cutlery" aria-hidden="true"></i><span>Main Course</span>
		                </a>   
		                <a href="<?php echo base_url();?>/dessert">
			                <i class="fa fa-bomb" aria-hidden="true"></i><span>Dessert Section</span>
		                </a>   
		                <a href="<?php echo base_url();?>/recipefooter">
			                <i class="fa fa-shopping-basket" aria-hidden="true"></i><span>Another Page</span>
		                </a>   
                    </div>
                </li>  
                        <!--end recipe section-->
    
                        <!--start post section-->
                        
                        <li class="item">
                        <a href="<?php echo base_url();?>author" class="menu-btn">
                           <i class="fa fa-user-circle-o"></i><span>Author</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="<?php echo base_url();?>message" class="menu-btn">
                           <i class="fa fa-address-book"></i><span>message</span>
                        </a>
                    </li>
                    <!--end post section-->
               
                    <!--start About Section-->
                    <li class="item">
                        <a href="<?php echo base_url();?>/teamsection" class="menu-btn">
                           <i class="fa fa-users"></i><span>Team Section</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="<?php echo base_url();?>/aboutuspage" class="menu-btn">
                           <i class="fa fa-user-circle-o"></i><span>About Us</span>
                        </a>
                    </li>
                    <!--End About Section-->
                    <!--start logout-->
                    <li class="item">
                        <a href="<?php echo base_url();?>" class="menu-btn">
                           <i class="fa fa-sign-out"></i><span>Log Out</span>
                        </a>
                    </li>
                    <!--end logout-->
                </div>
            </div>
            <!-- Sidbar End -->
            <!-- Main container start -->
            <div class="main-container"style="height:700px;">
                <h2 class="Header-form">Recipe Index</h2>
                <div class="box"style="height:580px;width:900px;margin-left:50px;">
                <form action="<?php echo site_url('admin/updaterecipeindex/'.$editrecipe->id);?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <label>Heading</label>
                        <input type="text" placeholder="  Enter your message..." id="heading" name="heading"value="<?php echo $editrecipe->heading;?>">
                    </div>
                    <div class="row">
                        <label>Background</label>
                        <input type="file" class="photo"name="background">
                        <?php if($editrecipe->background){?>
                        <img width="20%" src="<?php echo site_url('asset/uploads/'.$editrecipe->background);?>">
                        <?php }?>
                    </div>
                    <div class="Submit-btn">
                        <input type="submit" Value="Update" id="edit" name="edit">
                        <input type="reset"  Value="Clear" id="clear" name="clear">
                    </div>
                  </form>
                </div>
            </div>
              <!-- Main container end -->
        </div> 
         <!-- Wrapper end -->
    </body>
    </html>