<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Style Sheet-->
    <link rel="stylesheet"href="<?php echo base_url();?>/asset/css/admincss/adminpanel.css">

    <!-- Javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

    <!-- Font Awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Bootstrap Grid System-->
    <link rel="stylesheet"href="<?php echo base_url();?>asset/css/admincss/bootstrap-grid.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/code.js">

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
                        <img src="<?php echo base_url();?>asset/img/user.jpg" alt="">
                        <p>Alex</p>
                    </center>

                    <!--start header-->
                    <li class="item">
                            <a href="<?php echo base_url();?>blog" class="menu-btn">
                               <i class="fa fa-home"></i><span>Home</span>
                            </a>
                        </li>
                    <li class="item">
                    <a href="<?php echo base_url();?>admin" class="menu-btn">
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
                        <a href="<?php echo base_url();?>recipeindex">
                            <i class="fa fa-cart-plus" aria-hidden="true"></i><span>Recipe Index</span>
                        </a>  
                        <a href="<?php echo base_url();?>maincourse">
			                <i class="fa fa-cutlery" aria-hidden="true"></i><span>Main Course</span>
		                </a>   
		                <a href="<?php echo base_url();?>dessert">
			                <i class="fa fa-bomb" aria-hidden="true"></i><span>Dessert Section</span>
		                </a>  
		                <a href="<?php echo base_url();?>recipefooter">
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
                        <a href="<?php echo base_url();?>teamsection" class="menu-btn">
                           <i class="fa fa-users"></i><span>Team Section</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="<?php echo base_url();?>aboutuspage" class="menu-btn">
                           <i class="fa fa-user-circle-o"></i><span>About Us</span>
                        </a>
                    </li>
                    <!--End About Section-->
                    <!--start logout-->
                    <li class="item">
                        <a href="<?php echo site_url('Admin/logout');?>" class="menu-btn">
                           <i class="fa fa-sign-out"></i><span>Log Out</span>
                        </a>
                    </li>
                    <!--end logout-->
                </div>
            </div>
            <!-- Sidbar End -->
            <!-- Main container start -->
            <div class="main-container"style="height:900px;">
                <h2 class="Header-form">Welcome to Admin Panel</h2>
                <button><a class="btn btn-warning btn-sm" href="http://localhost/codeigniter/addauthor">Add Author</a></button>
                   <table class="table table-bordered table-dark">
                   <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">UserName</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                foreach($fetchauthor as $author){
                  ?>
                  <tr class="">
                    <th scope="row"><?php echo $author->id;?></th>
                    <td><?php echo $author->username;?></td>
                    <td><?php echo $author->name;?></td>
                    <td><?php echo $author->email;?></td>
                    <td><?php echo $author->password;?></td>
                    <td>
                        <a class="btn btn-outline-warning btn-sm" href="<?php echo site_url('admin/editauthor/'.$author->id)?>">edit</a>
                        <a class="btn btn-outline-warning btn-sm" href="<?php echo site_url('admin/deleteauthor/'.$author->id)?>">delete</a>
                        <a class="btn btn-outline-warning btn-sm" href="<?php echo site_url('admin/viewauthor/'.$author->id)?>">view</a>
                        <?php 
                        if($author->status<=0){
                            ?>
                        
                        <a class="btn btn-outline-warning btn-sm" href="<?php echo site_url('admin/approveauthor/'.$author->id)?>">Approve</a>
                            <?php
                        }
                        ?>
                        </td>
                  </tr>
          
                  <?php
          }
          ?>
                </tbody>
                    </table>
                    <?php echo $this->pagination->create_links();?>
                </div>
            <!-- Main container end -->
            </div> 
         <!-- Wrapper end --> 
        </div>     
    </body>
</html>
