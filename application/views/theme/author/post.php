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
                        <img src="<?php echo base_url();?>/asset/img/user.jpg" alt="">
                        <p>Alex</p>
                    </center>
                    <!--start header-->
              
                   <!--end header-->
    
                        <!--start recipe section-->
              
                        <!--end recipe section-->
    
                        <!--start post section-->
                
                        <!--end post section-->
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
                        <!--End About Section-->
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
            <div class="main-container"style="height:900px;">
                <h2 class="Header-form">Welcome to Admin Panel</h2>
                <button><a class="btn btn-warning btn-sm" href="http://localhost/codeigniter/addpost">Add Post</a></button>
                <table class="table table-bordered table-dark">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                        <th scope="col">Recipe-Title</th>
                        <th scope="col">Post by</th>
                        <th scope="col">Date</th>
                        <th scope="col">Image</th>
                        <th scope="col">Content</th>
                       
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <?php
                     foreach($fetchdessert as $post){
                ?>
                <tbody>
                    <tr>
                    <tr>
                        <th scope="row"><?php echo $post->id;?></th>
                        <td><?php echo substr ($post->recipetitle,0,10);?></td>
                        <td><?php echo substr ($post->postby,0,10);?></td>
                        <td><?php echo $post->date;?></td>
                        <td><img width="50px" src="<?php echo base_url().'asset/uploads/'.$post->image;?>"></td>
                        <td><?php echo substr ($post->content,0,50);?>...</td>
                        
                        <td>
                        <a class="btn btn-outline-warning btn-sm" href="<?php echo site_url('author/editpost/'.$post->id)?>"role="button">Edit</a>
                        <a class="btn btn-outline-warning btn-sm" href="<?php echo site_url('admin/deletepost/'.$post->id)?>"role="button">Delete</a>
                        <a class="btn btn-outline-warning btn-sm" href="<?php echo site_url('admin/viewpost/'.$post->id)?>"role="button">View</a></td>
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
    </body>
    </html>