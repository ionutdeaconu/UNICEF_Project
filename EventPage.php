<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Google Sign in-->
    <meta name="google-signin-client_id" content="1072977554166-st43ulc96co7ldgmc609fvukufj67c0h.apps.googleusercontent.com">

    <title></title>
    <?php session_start();?>
    
    
</head>
<body>
    
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<header class="content bgimage">
    <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsemenu">
                <span class="sr-only">Toggle nav</span>
                <span class ="icon-bar"></span>
                <span class ="icon-bar"></span>
                <span class ="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Moonlight Engine</a>
        </div>
        <div class="collapse navbar-collapse" id="collapsemenu">
        <ul class="nav navbar-nav">
            <li><a href="index.html">Home</a></li>
            <li class="active"> <a href ="eventPage.html"> Events</a></li>
            <li> <a href ="dontation.html"> Donate </a></li>
            <li> <a href ="event-media.html">Media</a></li>
            <li> <a href ="profilePage.html">User</a></li>
            <li>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Item 1</a></li>
                    <li><a href="#">Item 2</a></li>
                    <li><a href="#">Item 3</a></li>
                </ul>
            </li>
            
             <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Log-in</a></li>
             </ul>
            
            
</nav>
<div class="container">
    <h1>Welcome text!</h1>
</div>
</header>
<!--Start content here-->
    <div class="container">
        <div class="row">
            <div class="col-md-8">
               <h1 id="EventID"><?php echo htmlspecialchars($_POST['title']); ?></h1>
                <p> <?php echo htmlspecialchars($_POST['description']); ?> </p>
                 </div>
                <div class="col-md-4 addInfo">
                <h1>QuickDetails</h1>
                <p><span class="glyphicon glyphicon-calendar"></span><?php echo htmlspecialchars($_POST['from']); ?> - <?php echo htmlspecialchars($_POST['to']); ?><br>
                    <span class="glyphicon glyphicon-map-marker"></span> Gower Street 52, <?php echo htmlspecialchars($_POST['country']); ?><br>
                    <span class="glyphicon glyphicon-user"></span> <?php echo htmlspecialchars($_POST['oname']); ?><br>
                    <a href="https://twitter.com/share" class="twitter-share-button" data-text="This is where text goes." data-via="AndresRojasJ98" data-size="large" data-hashtags="Testing">Tweet</a> 
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script><br>
                    
                    <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Share</a></div>
                   
                    
                    </p>
            </div>
            </div>
    </div>
                
    <div class="container">
        <div class="row">
            <hr>
            <div class ="col-md-4">
                    <h1>How to get there</h1>
                    <p><?php echo htmlspecialchars($_POST['indications']); ?></p></div>
            <?php

    function showMap()
    {
      $Address = htmlspecialchars($_POST['address']);
      $Address = urlencode($Address);
      $request_url = "http://maps.googleapis.com/maps/api/geocode/xml?address=".$Address."&sensor=true";
      $xml = simplexml_load_file($request_url) or die("url not loading");
      $status = $xml->status;
      if ($status=="OK") {
          $Lat = $xml->result->geometry->location->lat;
          $Lon = $xml->result->geometry->location->lng;
      }
    }
    ?>
                <script>
      var map;
      function initMap() {
        var myLatLng = new google.maps.LatLng(<?php echo $Lat;?>, <?php echo $Lon?>);

        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: myLatLng
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
        });
      }
    </script>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBXtkPx2VepKXV6hd2AkS1oJqAnTos8gJ4&callback=initMap">
    </script>  
                
            </div>
        
           
    
        </div>
    </div>

<!--Google API-->
<div id="map"></div>
    <script>
        $lat = 40;
        $lon = 40;
      function initMap() {
        var myLatLng = new google.maps.LatLng(lat, lon);

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: myLatLng
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
        });
      }
    </script>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBXtkPx2VepKXV6hd2AkS1oJqAnTos8gJ4&callback=initMap">
    </script>
</body>
        
        
        
        <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                             <h4 class="modal-title">Sign in with Google</h4>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class=  "col-sm-4" "col-xs-6">
                                        <p>Sign in test</p>
                                        <div class="g-signin2" data-onsuccess="onSignIn"></div>
          
    </div>
</div>
    </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>
        </ul> 
    </div>


</html>




