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

    <title>Example Event</title>
    
    <?php session_start();?>

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

        <!-- Page Content -->

      
        
              
        <div class="container-fluid">
            
                <img class ="img-responsive img-center" src="Images/EventBanner.png">
           
            
            <div class="col-md-8 col-sm-8">
                
               <h1 id="EventID">EventTitle <a class="btn btn-warning center-line" href="editEvent.php">Admin Page</a></h1>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac diam gravida leo commodo tempus vitae sit amet lacus. Duis eros justo, lobortis sed mattis sit amet, porta eu ante. Nullam nec convallis lorem, sed rhoncus tellus. Mauris consequat scelerisque interdum. Ut dignissim neque a purus accumsan, quis congue augue scelerisque. Integer et elit a justo rutrum pellentesque id non ipsum. Nullam ac viverra lorem. </p>
                
                 </div>
                <div class="col-md-4 col-sm-4 addInfo">
                <h1>QuickDetails</h1>
                <p><span class="glyphicon glyphicon-calendar"></span> February 14th-15th 2017<br>
                    <span class="glyphicon glyphicon-map-marker"></span> Gower Street 52, LDN<br>
                    <span class="glyphicon glyphicon-user"></span> UNICEF<br>
                    <a href="https://twitter.com/share" class="twitter-share-button" data-text="This is where text goes." data-via="AndresRojasJ98" data-size="large" data-hashtags="Testing">Tweet</a> 
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script><br>
                    
                    <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Share</a></div>
                        
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#purchaseModal">Buy Tickets</button>
            
                   
                    
                    </p>
             
            </div>
        
            
    
   
    
                <div class ="col-md-5 col-lg-6 col-sm-12">
                    <hr>
                    <h1>How to get there</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac diam gravida leo commodo tempus vitae sit amet lacus. Duis eros justo, lobortis sed mattis sit amet, porta eu ante. Nullam nec convallis lorem, sed rhoncus tellus. Mauris consequat scelerisque interdum. Ut dignissim neque a purus accumsan, quis congue augue scelerisque. Integer et elit a justo rutrum pellentesque id non ipsum. Nullam ac viverra lorem.</p></div>
            
                <div class= "col-lg-6 col-md-7 col-sm-12">
                    <hr>
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.381665226461!2d-0.13622878422938722!3d51.52455917963792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761b2f69173579%3A0xd008c67faecc133e!2sUniversity+College+London!5e0!3m2!1ses!2suk!4v1488309996621" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
   
    
      
    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>
   
                        
   
 
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
    
    <!-- Google Sign in --> 
    <script src="https://apis.google.com/js/platform.js" async defer></script>

</body>
    
        <!-- Modal - Purchase -->
<div id="purchaseModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ticket Purchase Window</h4>
      </div>
      <div class="modal-body">
           <h1>Register</h1>
        <p>Select a ticket and proceed to Paypal.</p>
           <div class="form-group">
              <label for="sel1">Select ticket:</label>
              <select class="form-control" id="sel1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
               </select>
            </div>
            <!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#purchaseModal">Pay with Paypal</button> -->
          
          <form class="paypal" action="PaypalCode/payments.php" method="post" id="paypal_form" target="_blank">
		<input type="hidden" name="cmd" value="_xclick" />
		<input type="hidden" name="no_note" value="1" />
		<input type="hidden" name="lc" value="UK" />
		<input type="hidden" name="currency_code" value="GBP" />
		<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />
		<input type="hidden" name="first_name" value="Customer's First Name"  />
		<input type="hidden" name="last_name" value="Customer's Last Name"  />
		<input type="hidden" name="payer_email" value="customer@example.com"  />
		<input type="hidden" name="item_number" value="123456" / >
		<input type="submit" name="submit" value="Submit Payment"/>
	</form>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
      </div>
    </div>
    </div>
    </div>
      
      
      
    
    <!-- Scripts for sidebar resize + Login-->
    
    <?php   include 'sidebarScripts.php';
            include 'googleFunctions.php';
    ?>

</html>
