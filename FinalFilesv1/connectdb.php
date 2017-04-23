<!DOCTYPE html>
<?php
$sql1 = "CREATE DATABASE moonlightdb3;";
$sql2 = "CREATE TABLE websitedesign (
WebsiteID INT(7) NOT NULL AUTO_INCREMENT,
WebsiteTitle VARCHAR(35) DEFAULT 'Moonlight Database',
LogoURL VARCHAR(1000),
AboutUs VARCHAR(5000),
BackgroundURL VARCHAR(1000),
Image1URL VARCHAR(1000),
Image2URL VARCHAR(1000),
Image3URL VARCHAR(1000),
BodyColor VARCHAR(20),
FooterDescription VARCHAR(5000) DEFAULT 'Powered by Unicef Moonlight',
PRIMARY KEY (WebsiteID)
)
";
$sql3 = "INSERT INTO websitedesign (WebsiteTitle) VALUES ('HOSTNAME');";
$sql4 = 

"CREATE TABLE events (
EventID INT(7) NOT NULL AUTO_INCREMENT,
EventName VARCHAR(35),
EventDescription VARCHAR(5000),
OrganiserName VARCHAR(35),
OrganiserDescription VARCHAR(10000),
BannerImage VARCHAR(100),
StartDate VARCHAR(20),
StartTime VARCHAR(20),
VenueName VARCHAR(35),
VenueRoute VARCHAR(5000),
AddressL1 VARCHAR(1000),
AddressL2 VARCHAR(1000),
City VARCHAR(20),
State VARCHAR(20),
Country VARCHAR(20),
PostalCode VARCHAR(10),

PRIMARY KEY (EventID)
)
"; //Create another table images and store eventID

$sql5 = 
"CREATE TABLE tickets (
TicketID INT(7) NOT NULL AUTO_INCREMENT,
TicketName VARCHAR(50),
TicketsAvailable INT(4),
TicketsSold INT(4),
TicketPrice DECIMAL (8,2),
EventID INT(7),

PRIMARY KEY (TicketID)
)
";

$user = '';
$pass = '';
$dbName = 'moonlightdb3';
$host = 'localhost';
$db = new mysqli($host, $user, $pass);

if ($db->select_db($dbName) === false) {
	if ($db->query($sql1) === TRUE) {
		$db = new mysqli($host, $user, $pass, $dbName);
		if ($db->query($sql2) === TRUE) {
			if ($db->query($sql3) === TRUE) {
				if ($db->query($sql4) === TRUE) {
					if ($db->query($sql5) === TRUE) {
					}
					else{
						die("Error: " . $db->error);
					}
				}
				else{
					die("Error: " . $db->error);
				}
			}
			
			
		}
		
	}
	else{
		die("Connection failed: " . $db->error);
	}
} 

$sql = "SELECT * FROM websitedesign WHERE WebsiteID = 1";
$result = $db->query($sql);
while($row=$result->fetch_assoc()) {
	$websiteTitle = $row['WebsiteTitle'];
	$logoURL = $row['LogoURL'];
	$aboutUs = $row['AboutUs'];
	$backgroundURL = $row['BackgroundURL'];
	$bodyColor = $row['BodyColor'];
	$image1URL = $row['Image1URL'];
	$image2URL = $row['Image2URL'];
	$image3URL = $row['Image3URL'];
	$footerDescription = $row['FooterDescription'];
}
?>



</html>
