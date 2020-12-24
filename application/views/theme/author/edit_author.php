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
                <h2 class="Header-form">Header Section</h2>
                <div class="box"style="height:580px;width:900px;margin-left:50px;">
                <form action="<?php echo site_url('admin/updateauthor/'.$editauthor->id);?>" method="post" enctype="multipart/form-data">
      
                    <div class="row">
                       <label>user</label>
                       <input type="text"
                        placeholder=" username" 
                        id="username" 
                         name="username" 
                      value="<?php echo $editauthor->username;?>"
                      />
                    </div>
                <div class="row">
                      <label>email</label>
                      <input type="email" id="email" name="email"
                       value="<?php echo $editauthor->email;?>"
                      />
                </div>
   
               <div class="row">
                  <label>password</label>
                 <input type="password" placeholder="password" id="password" name="password"
                      value="<?php echo $editauthor->password;?>"
                    />
           
            </div>
    
             <div class="Submit-btn">
              <input type="submit"  valuee="Update" id="send" name="Update">
             <input type="reset"  valuee="Reset" id="clear" name="Reset">
             </div>
            </form>
                </div>
            </div>
            <!-- Main container end -->
        </div> 
         <!-- Wrapper end -->      
</body>
</html>
