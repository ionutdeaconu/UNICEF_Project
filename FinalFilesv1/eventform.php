<!DOCTYPE html>


<?php

include 'connectdb.php';

$valid = True;
$allempty = False;

if (isset($_POST['EventName'])) {
	$eventName = $_POST["EventName"];
	$eventDescription = $_POST["EventDescription"];
	$organiserName = $_POST["OrganiserName"];
	$organiserDescription = $_POST["OrganiserDescription"];
	$startDate= $_POST['StartDate'];
	$startTime = $_POST['StartTime'];
	$venueName = $_POST['VenueName'];
	$venueRoute = $_POST['VenueRoute'];
	$addressL1 = $_POST['AddressL1'];
	$addressL2 = $_POST['AddressL2'];
	$city = $_POST['City'];
	$state = $_POST['State'];
	$country = $_POST['Country'];
	$postalCode = $_POST['PostalCode'];
	$numTickets = $_POST['NumTickets'];
	echo $numTickets;
	
	$target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["imageUpload"]["name"]);
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    if (move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $target_file)){
		$bannerImage=($target_dir.basename($_FILES["imageUpload"]["name"]));
	}
	else{
		$bannerImage='';
	}

	$sql = "INSERT INTO events (EventName, EventDescription, OrganiserName, OrganiserDescription, BannerImage, StartDate, StartTime, VenueName, VenueRoute, AddressL1, AddressL2, City, State, Country, PostalCode)
	VALUES ('$eventName', '$eventDescription', '$organiserName', '$organiserDescription', '$bannerImage','$startDate', '$startTime', '$venueName', '$venueRoute', '$addressL1', '$addressL2', '$city', '$state', '$country', '$postalCode');";
	if ($db->query($sql) === TRUE) {
		echo "<script>RecordCreated()</script>";
		//header("Refresh:0");
			
		$sql = "SELECT EventID FROM events WHERE EventName = '$eventName' AND StartDate = '$startDate'";
		$result = $db->query($sql);
		while($row = $result->fetch_assoc()) {
			$eventID = $row['EventID'];
		}
	}
	else {
		echo ($sql);
		echo("");
		die("Error: " . $db->error);
	}
	
	
	$ticketName = "$"."_POST"."['"."TicketName";
	$ticketAmount = "$"."_POST"."['"."TicketAmount";
	$ticketPrice = "$"."_POST"."['"."TicketPrice";
	
	for ($i=1; $i<$numTickets+1; $i++){
		$ticketName = $_POST['TicketName'.$i];
		$ticketAmount = $_POST['TicketAmount'.$i];
		$ticketPrice = $_POST['TicketPrice'.$i];
		$sql = "INSERT INTO tickets (TicketName, TicketsAvailable, TicketsSold, TicketPrice, EventID) VALUES
		('$ticketName', '$ticketAmount', '0', '$ticketPrice', '$eventID')";
		if ($db->query($sql) === TRUE) {
			echo "<script>RecordCreated()</script>";
			//header("Refresh:0");
		}
		else {
			echo ($sql);
			echo("");
			die("Error: " . $db->error);
			
		}
	}
		
}
?>


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
        <!--Google Sign in-->
    <?php include 'googleSignIn.php';?>

    <title>Create Event</title>

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


    <?php
	include 'sidebar.php';
	?>
        
   
            <div class="container-fluid">
                 <img class ="img-responsive img-center" src="Images/EventBanner.png">
                
    <h1>Event Details</h1>

                

<form action="eventform.php" method="post" enctype="multipart/form-data">
    
    <div class = "form-group form-group.required">
    <label for="oname"><span class="label-req">*</span>Organiser name: </label>
        <input class = "form-control" type="text" id="OrganiserName" placeholder="Enter organiser name" name="OrganiserName" required>
    </div>
    
    <div class = "form-group">
        <label for="odesc"><span class="label-req">*</span>Organiser description: </label>
        <input class = "form-control" type="text" id="OrganiserDescription" placeholder="Enter description" name="OrganiserDescription" required>
    </div>
    
    <div class = "form-group">
        <label for="title"><span class="label-req">*</span>Event title: </label>
        <input class = "form-control" type="text" id="EventName" placeholder="Enter event title" name="EventName" required>
    </div>
    
    <div class = "form-group">
        <label for="edesc"><span class="label-req">*</span>Event description: </label>
        <textarea  rows ="5" class = "form-control" type="text" id="EventDescription" placeholder="Enter description" name="EventDescription" required></textarea>
    </div>
    
    <div class = "form-group">
        <label for="imageUpload">Event banner: (1600x400) </label>
        <input class = "form-control" type="file" id="imageUpload" placeholder="Add banner" name="imageUpload">
    </div>
    

<hr>

<h2>Event dates</h2>
    
    <div class = "form-group">		
		<label for="dstart"><span class="label-req">*</span>Dates: </label>
        <input class = "form-control" type="text" id="StartDate" placeholder="Enter a date" name="StartDate" required>
		
		<label for="tstart"><span class="label-req">*</span>Timing: </label>
        <input class = "form-control" type="text" id="StartTime" placeholder="Enter a time" name="StartTime" required>
    </div>
    
    
    
    <hr>
    
    <h2>Venue Details</h2>
    
    <div class = "form-group">
    <label for="vname"><span class="label-req">*</span>Venue name: </label>
        <input class = "form-control" type="text" id="VenueName" placeholder="Enter venue name" name="VenueName" required>
    </div>
    
    
    <div class = "form-group">
        <label for="indications"><span class="label-req">*</span>How to get there: </label>
        <textarea  rows ="5" class = "form-control" type="text" id="VenueRoute" placeholder="Please explain how to get there!" name="VenueRoute" required></textarea>
    </div>
    
    <div class = "form-group">
    <label for="address1"><span class="label-req">*</span>Address Line 1: </label>
        <input class = "form-control" type="text" id="AddressL1" placeholder="E.g: Gower Street 66, Euston" name="AddressL1" required>
    </div>
    
    <div class = "form-group">
    <label for="address2">Additional address details:</label>
        <input class = "form-control" type="text" id="AddressL2" placeholder="E.g: Floor 2, Room 23" name="AddressL2">
    </div>
    
    <div class = "form-group">
    <label for="city">City / Town:</label>
        <input class = "form-control" type="text" id="City" placeholder="Enter City / Town" name="City">
    </div>
    
    <div class = "form-group">
    <label for="state">State / Province / Region: </label>
        <input class = "form-control" type="text" id="State" placeholder="Enter State / Province / Region" name="State" >
    </div>
	
	<div class = "form-group">
    <label for="state">Country: </label>
        <input class = "form-control" type="text" id="Country" placeholder="Enter Country:" name="Country" >
    </div>
    
    <div class = "form-group">
    <label for="pcode"><span class="label-req">*</span>ZIP/ Postal Code: </label>
        <input class = "form-control" type="text" id="PostalCode" placeholder="Enter ZIP / Postal Code" name="PostalCode" required>
    </div>
    
    <hr>
    <h2><span class="label-req">*</span>Tickets <button type="button" class="btn btn-success center-line" onclick="addPaidTicket()" >Add Ticket</button> <button type="button" class="btn btn-warning center-line" onclick="removeLast()" >Remove Tickets</button></h2>
    
     <div class="ticket">       
      <div id="type">    
      </div>
    </div>
	
	<p id="demo"></p>
    
	<script>
	  var paid = 0;
	  function addPaidTicket() {    
		$('<div class = "form-group form-inline"><div class = "form-group"><label for="TicketName' + ++paid + '" class="form-control-label"><span class="label-req">*</span>Ticket Name</label><input required class = "form-control" type="text" id="TicketName" placeholder="E.g: Early Bird" name="TicketName'+ paid + '"></div><div class = "form-group"><label for="TicketAmount'+ paid + '" class="form-control-label "><span class="label-req">*</span>Amount of tickets available</label><input required class = "form-control" type="text" id="TicketAmount" placeholder="E.g: 50" name="TicketAmount'+ paid + '"></div><div class = "form-group"><label for="TicketPrice'+ paid + '" class="form-control-label "><span class="label-req">*</span>Ticket Price (£)</label><input required class = "form-control" type="text" id="TicketPrice" placeholder="E.g: 5" name="TicketPrice'+ paid + '"></div></div>') .appendTo("#type");
		document.getElementById("demo").innerHTML = ('<input type="hidden" name="NumTickets" id="NumTickets" value="' + paid + '">');
		//document.write('<input type="hidden" name="NumTickets" id="NumTickets" value="' + paid + '">');
	  }       
	  
	  function removeLast() {
		var lastChild = document.getElementById("type").lastChild;
		lastChild.parentNode.removeChild(lastChild);
		
		if(paid == 0)
            {
                return;
            }
        else
            {
                paid--;
            }
          
		document.getElementById("demo").innerHTML = ('<input type="hidden" name="NumTickets" id="NumTickets" value="' + paid + '">');
		//document.getElementById("demo").innerHTML = paid;
	  }
	  
	  /*var div = document.createElement('div');
	  //div.innerHTML = '<input type="hidden" name="NumTickets" id="NumTickets" value="' + paid + '">';
	  document.body.appendChild(div);
	  document.write('<input type="hidden" name="NumTickets" id="NumTickets" value="' + paid + '">');
	  document.getElementById("demo").innerHTML = paid; */
	  
	  
	</script>
    
    <hr>
    <button type="submit" class="btn btn-primary center-block">Create Event</button>
  </form>
    

        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>

        </div> 
            
 


    
            

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

</body>
    
    <?php   include 'sidebarScripts.php';
            include 'googleFunctions.php';
    ?>


</html>