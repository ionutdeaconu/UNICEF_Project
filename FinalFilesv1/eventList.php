<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
        <!--Google Sign in-->
    <?php include 'googleSignIn.php';?>

    <title>Event Listing</title>

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

 
        <!-- Sidebar -->
        <?php include 'sidebar.php';?>
        <!-- /#sidebar-wrapper -->
      
        
             
            <div class="container-fluid">
                
                <img class ="img-responsive banner-img" src="Images/EventBanner.png">
                

<div class="container">
    <div class="row">
        <h1 class="center-block">List of Events</h1>
        <div class=  "col-sm-4" "col-xs-6">
            <div class="thumbnail">
                <a href="#">   
                    <img src="EventsImg/EventBan3.jpg">
                </a>
                <div class="caption">
                    <h3>AntiBullying Rally</h3>
                    <p><span class="glyphicon glyphicon-calendar"></span> February 14th-15th 2017<br>
                    <span class="glyphicon glyphicon-map-marker"></span> Gower Street 52, LDN<br>
                    <span class="glyphicon glyphicon-user"></span> UNICEF<br>
                        <a href ="eventPage.php"><button class="btn btn-success center-block">View Event</button></a>   

                    </p>
                </div>
            </div>    
        </div>
        
                <div class=  "col-sm-4" "col-xs-6">
            <div class="thumbnail">
                <a href="#">   
                    <img src="EventsImg/EventBan3.jpg">
                </a>
                <div class="caption">
                    <h3>AntiBullying Rally</h3>
                    <p><span class="glyphicon glyphicon-calendar"></span> February 14th-15th 2017<br>
                    <span class="glyphicon glyphicon-map-marker"></span> Gower Street 52, LDN<br>
                    <span class="glyphicon glyphicon-user"></span> UNICEF<br>
                        <a href ="eventPage.php"><button class="btn btn-success center-block">View Event</button></a>   

                    </p>
                </div>
            </div>    
        </div>
        
                <div class=  "col-sm-4" "col-xs-6">
            <div class="thumbnail">
                <a href="#">   
                    <img src="EventsImg/EventBan3.jpg">
                </a>
                <div class="caption">
                    <h3>AntiBullying Rally</h3>
                    <p><span class="glyphicon glyphicon-calendar"></span> February 14th-15th 2017<br>
                    <span class="glyphicon glyphicon-map-marker"></span> Gower Street 52, LDN<br>
                    <span class="glyphicon glyphicon-user"></span> UNICEF<br>
                        <a href ="eventPage.php"><button class="btn btn-success center-block">View Event</button></a>   

                    </p>
                </div>
            </div>    
        </div>
            
        
                <div class=  "col-sm-4" "col-xs-6">
            <div class="thumbnail">
                <a href="#">   
                    <img src="EventsImg/EventBan3.jpg">
                </a>
                <div class="caption">
                    <h3>AntiBullying Rally</h3>
                    <p><span class="glyphicon glyphicon-calendar"></span> February 14th-15th 2017<br>
                    <span class="glyphicon glyphicon-map-marker"></span> Gower Street 52, LDN<br>
                    <span class="glyphicon glyphicon-user"></span> UNICEF<br>
                        <a href ="eventPage.php"><button class="btn btn-success center-block">View Event</button></a>   

                    </p>
                </div>
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
    
     <?php   include 'sidebarScripts.php';
            include 'googleFunctions.php';
    ?>


</html>
