<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My Profile</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper" class="toggled">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="index.php">
                        MoonLight Engine
                    </a>
                </li>
                <li>
                    <a href="UserPage.php">Dashboard</a>
                </li>
                <li>
                    <a href="#">Search</a>
                </li>
                <li>
                    <a href="#">Overview</a>
                </li>
                <li>
                    <a href="eventPage.html">Events</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Contact Us</a>
                </li>
                <li>
                     <a href="CreateFormv2.php">Add event</a>
                </li>
                <li>
                    <a href="#" data-toggle="modal" data-target="#loginModal">Log In - Register</a>
                </li>
                
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

      
        
             
            <div class="container-fluid">
                <img class ="img-responsive" src="Images/EventBanner.png">
               
    <h1>Profile info</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur at euismod augue. Quisque ut iaculis est, eget rhoncus augue. Duis arcu leo, suscipit quis blandit sed, suscipit quis arcu. Quisque risus ante, mattis vel iaculis pulvinar, consequat a tortor. Quisque malesuada turpis in ex rhoncus, vel tempus velit pretium. Vestibulum eu magna ex. Cras sed orci id est placerat hendrerit. Proin vel mi vel libero tempor aliquam. Morbi mollis enim magna, rutrum tempus neque aliquet iaculis. Vivamus sed dignissim enim, non rhoncus neque. Praesent lorem dui, facilisis gravida fringilla in, viverra vitae lacus.</p>
            <hr>
        
    
    
    <h1>Events attended</h1>
    <div class="row">
        <div class=  "col-md-8 center-block">
 
            <div class="profile-list-group list-group  text-left">
                
                
                <a class ="list-group-item" href="eventPage.html">   
                    <img src="EventsImg/130Thumb.jpg" href="#" class="img-rounded img-responsive pull-left list-img">
                
                    <span class="label label-info pull-right">X Days ago</span>
                    <h1>AntiBullying Rally</h1>
                    
                    <span class="glyphicon glyphicon-map-marker"></span><span>Gower Street 52, LDN</span><br>
                    <span class="glyphicon glyphicon-user"></span> UNICEF
                    <span>Gower Street 52, LDN</span><br>

                </a>
            
            <a class ="list-group-item" href="eventPage.html">   
                    <img src="EventsImg/130Thumb.jpg" href="#" class="img-rounded img-responsive pull-left list-img">
                
                    <span class="label label-info pull-right">X Days ago</span>
                    <h1>AntiBullying Rally</h1>
                    
                    <span class="glyphicon glyphicon-map-marker"></span><span>Gower Street 52, LDN</span><br>
                    <span class="glyphicon glyphicon-user"></span> UNICEF
                    <span>Gower Street 52, LDN</span><br>

                </a>
        
        <a class ="list-group-item" href="eventPage.html">   
                    <img src="EventsImg/130Thumb.jpg" href="#" class="img-rounded img-responsive pull-left list-img">
                
                    <span class="label label-info pull-right">X Days ago</span>
                    <h1>AntiBullying Rally</h1>
                    
                    <span class="glyphicon glyphicon-map-marker"></span><span>Gower Street 52, LDN</span><br>
                    <span class="glyphicon glyphicon-user"></span> UNICEF
                    <span>Gower Street 52, LDN</span><br>

                </a>
    
               
                
                
                
                
                
                
            </div> 
            
 
    </div>
</div>
    </div>
            
    <a href="#menu-toggle" class="btn btn-default " id="menu-toggle"><span class="glyphicon glyphicon-chevron-right"></span></a>
    <hr>
    
          
   
                        
   
 
        <!-- /#page-content-wrapper -->

  
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    
        <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
    </div>
</body>
    
       <!-- Login Modal -->
    <div id="loginModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Sign In</h4>
      </div>
      <div class="modal-body">
           <h1>Sign In with Google: <div class="g-signin2" data-onsuccess="onSignIn"></div> </h1>
        

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
      </div>
    </div>
        </div>
    </div>
    <!-- End of login modal-->


</html>
