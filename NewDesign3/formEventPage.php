<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!--Google Sign in-->
    <meta name="google-signin-client_id" content="1072977554166-st43ulc96co7ldgmc609fvukufj67c0h.apps.googleusercontent.com">

    <title><?php echo htmlspecialchars($_POST['title']); ?></title>
    
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
    
    <!--Faceook-->
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    
    <!--Twitter-->
    <script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));</script>

    <div id="wrapper" class="toggled">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="index.html">
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
                    <a href="eventPage.php">Events</a>
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

      
        
              
        <div class="container">
            <img class ="img-responsive" src="Images/EventBanner.png">
            <div class="col-md-8 col-sm-8">
                
                <!--THIS ARE THE KEYS: 
                
                <table>
                    <//*?php 


                    foreach ($_POST as $key => $value) {
                        echo "<tr>";
                        echo "<td>";
                        echo $key;
                        echo "</td>";
                        echo "<td>";
                        echo $value;
                        echo "</td>";
                        echo "</tr>";
                    }


                    ?*//>
</table>-->
                
               <h1 id="EventID"><?php echo htmlspecialchars($_POST['title']); ?><button type="button" class="btn btn-warning center-line ">Admin Page</button></h1>
                <p> <?php echo htmlspecialchars($_POST['edesc']); ?></p>
                 </div>
                <div class="col-md-4 addInfo">
                <h1>Quick Details</h1>
                <p><span class="glyphicon glyphicon-calendar"></span> February 14th-15th 2017<br>
                    <span class="glyphicon glyphicon-map-marker"></span><?php echo htmlspecialchars($_POST['address1']); ?>, <?php echo htmlspecialchars($_POST['country']); ?><br>
                    <span class="glyphicon glyphicon-user"></span><?php echo htmlspecialchars($_POST['oname']); ?><br>
                    
                    <span><a href="https://twitter.com/share" class="twitter-share-button" data-text="This is where text goes." data-via="AndresRojasJ98" data-size="large" data-hashtags="Testing">Tweet</a><div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Share</a></div></span> <br>
                    
                   <span><button type="button" class="btn btn-success" data-toggle="modal" data-target="#purchaseModal">Buy Tickets</button></span>

                    
                    </p>
            </div>
            
    
    
    
                <div class ="col-md-5 col-lg-6 col-sm-12">
                    <hr>
                    <h1>How to get there</h1>
                    <p><?php echo htmlspecialchars($_POST['indications']); ?></p></div>
            
                <div class= "col-lg-6 col-md-7 col-sm-12">
                    <hr>
                   <iframe src="https://maps.google.it/maps?q=<?php echo htmlspecialchars($_POST['address1']); ?>&output=embed" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
    
    
      
    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>
   
                        
   
 
        <!-- /#page-content-wrapper -->

  
    <!-- /#wrapper -->

      <!-- Google Sign in --> 
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    
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
          <form class = "paypal" action="PaypalCode/payments.php" method="post" id="paypal_form" target="_blank">
          <div class="form-group">
              <label for="sel1">Select ticket:</label>
              <select class="form-control" id="sel1" name="ticketType">
                  <option value = ""><?php echo htmlspecialchars($_POST['ticketName']); ?></option>
                  <option value = "">Ticket 1</option>
                  <option value = "">Ticket 1</option>
               </select>
            </div>
            <input type="hidden" name="cmd" value="_xclick" />
            <input type="hidden" name="no_note" value="1" />
            <input type="hidden" name="lc" value="UK" />
            <input type="hidden" name="currency_code" value="GBP" />
            <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />
            <input type="hidden" name="first_name" value="Customer's First Name"  />
            <input type="hidden" name="last_name" value="Customer's Last Name"  />
            <input type="hidden" name="payer_email" value="customer@example.com"  />
            <input type="hidden" name="item_number" value="123456" / >
         
            <button type="submit" name = "submit" class="btn btn-success center-block">Proceed to Paypal</button>
              </form>
            <!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#purchaseModal">Pay with Paypal</button> -->
          
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
      </div>
    </div>
    </div>
    </div>
      
      
      
    
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
