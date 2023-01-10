<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="img/logo.png" rel="icon">
    <title>User List</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> 

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

    <script>
        function myFunction() {
            var x;
            var r = confirm("Do you really want to remove this user from system? Press OK for Remove Press Cancel for Keep user!!!");
            if (r == true) {
                window.location.href = "././deleteuser.php"
        }
            else {
            x = "Keep user in database!!!";
        }
        document.getElementById("demo").innerHTML = x;
        }

    </script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper" >
    <!-- Sidebar -->
        <ul class="navbar-nav bg-gray-900  sidebar sidebar-dark accordion " id="accordionSidebar">

              <!-- Sidebar - Brand -->
                    <div class="sidebar-brand-icon ">
                    <img class="mw-100 " src="img/logo.png" >               
                 </div>
         

            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
                <a class="nav-link " href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>


            <!-- Nav Item - req -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="addclubs.php" >
                    <i class="fas fa-fw fa-plus-square"></i>
                    <span>Add Clubs</span>
                </a>  
            </li>

            <!-- Nav Item - add & remove clubs -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="clublist.php" >
                    <i class="fa fa-list-ol" ></i>


                    <span>Club List</span>
                </a>   
            </li>

             <!-- Nav Item - user list -->
             <li class="nav-item">
                <a class="nav-link collapsed" href="userlist.php" >
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <span>User List</span>
                </a>   
            </li>

                  <!-- Nav Item - special events -->
                  <li class="nav-item">
                <a class="nav-link collapsed" href="specialevents.php" >
                <i class="fa fa-th-large" aria-hidden="true"></i>
                 <span>Special Events</span>
                </a>   
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="setting.php" >
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Settings</span>
                </a>
               
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider mb-4 p-3  fixed-bottom">

            <li class="nav-item active ">
            <a class="nav-link" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-1x fa-fw ml-4 mb-3 text-gray-400  fixed-bottom"></i>
                <h6 class="fixed-bottom mb-0 ml-4 px-4 p-3">Logout</h6>
            </a>
        </li>

          

        </ul>
        <!-- End of Sidebar -->



        <div class="container-lg border border-2 m-3 p-3">

            <h2 class="m-1 p-2">User List</h2>
            <div class="input-group mb-3 ">
                <div class="form-outline">
                <input type="search" id="form1" class="form-control" placeholder="Search User" aria-label="Search" />
                  </div>
                <button type="button" class="btn btn-primary">
                  <i class="fas fa-search"></i>
                </button>
            </div>

            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                    <div class="row">
                    <div class="col-sm-8">
                    </div>
                    </div>
                    </div>
                    <table class="table table-hover">
                    <thead>
                    <tr>
                    <th>User ID</th>
                    <th>User Name</th>
                    <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php

                    require('get_Users.php');

                    foreach ($users as $members){

                    ?>

                    <tr>
                        <td><?php echo $members['User_ID'];?></td>
                        <td><?php echo $members['FULL_NAME'];?></td>
                    <td>
                    
                    <button onclick="myFunction()" ><i class="fa fa-trash"></i></button>
                    <button ><i class="fa fa-check-circle"></i></button>
                    <p id="demo"></p>
                    

                   
                    </td>
                    </tr>

                    <?php }?>
                            
                </tbody>
                    </table>
                    </div>
                </div>
               
            </div>

           
    
</body>
</html>
