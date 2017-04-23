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
    
    <title>Edit your event</title>

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

                

<form action="formEventPage.php" method="post">
    <?php echo htmlspecialchars($_POST['indications']); ?>
    <div class = "form-group">
    <label for="oname"><span class="label-req">*</span>Organiser name: </label>
        <input class = "form-control" type="text" id="oname" placeholder="Enter organiser name" name="oname" value ="Put DB oname here" required>
    </div>
    
    <div class = "form-group">
        <label for="odesc"><span class="label-req">*</span>Organiser description: </label>
        <input class = "form-control" type="text" id="odesc" placeholder="Enter description" name="odesc" value ="Put DB odesc here" required>
    </div>
    
    <div class = "form-group">
        <label for="title"><span class="label-req">*</span>Event title: </label>
        <input class = "form-control" type="text" id="title" placeholder="Enter event title" name="title"  value ="Put DB title here"required>
    </div>
    
    <div class = "form-group">
        <label for="edesc"><span class="label-req">*</span>Event description: </label>
        <textarea  rows ="5" class = "form-control" type="text" id="edesc" placeholder="Enter description. You might want to share information such as: schedule, speakers, what to expect..." name="edesc" required>Put DB edesc here</textarea>
    </div>
    
    <div class = "form-group">
        <label for="bannerimg">Event banner: (1600x400) </label>
        <input class = "form-control" type="file" id="files" placeholder="Add banner" name="bannerimg" value ="Put DB bannerimg here">
    </div>
    
    <div class = "form-group">
        <label for="bannerimg">Event thumbnail: (200x200 max) </label>
        <input class = "form-control" type="file" id="files" placeholder="Add thumbnail" name="thumbimg" value ="Put DB thumbimg here">
    </div>
    

<hr>

<h2>Event time</h2>
    
    <div class = "form-group">
        <label for="tstart"><span class="label-req">*</span>Select a start date:</label>
        <input class = "form-control" type="text" id="tstart" placeholder="Enter a date, e.g.: 14/04/2017" name="tstart" value ="Put DB tstart here"required>
    </div>
    
        <div class = "form-group">
        <label for="tstart">Select an end date:</label>
        <input class = "form-control" type="text" id="tend" placeholder="Enter a date, e.g.: 15/04/2017" name="tend" value ="Put DB tend here" >
    </div>
    
    
   
    
    <hr>
    
    <h2>Venue Details</h2>
    
    <div class = "form-group">
    <label for="vname"><span class="label-req">*</span>Venue name: </label>
        <input class = "form-control" type="text" id="vname" placeholder="Enter venue name" name="vname" value ="Put DB vname here"required>
    </div>
    

    
    <div class = "form-group">
        <label for="indications">How to get there: </label>
        <textarea  rows ="5" class = "form-control" type="text" id="indications" placeholder="Please explain how to get there!" name="indications">Put DB indications here</textarea>
    </div>
    
    <div class = "form-group">
    <label for="address1"><span class="label-req">*</span>Address Line 1: </label>
        <input class = "form-control" type="text" id="address1" placeholder="E.g: Gower Street 66, Euston" name="address1" value ="Put DB address1 here" required>
    </div>
    
    <div class = "form-group">
    <label for="address2">Additional address details:</label>
        <input  class = "form-control" type="text" id="address2" placeholder="E.g: Floor 2, Room 23" name="address2" value ="Put DB address2 here">
    </div>
    
    <div class = "form-group">
    <label for="city">City / Town:</label>
        <input class = "form-control" type="text" id="city" placeholder="Enter City / Town" name="city" value ="Put DB city here" >
    </div>
    
    <div class = "form-group">
    <label for="state">State / Province / Region: </label>
        <input class = "form-control" type="text" id="state" placeholder="Enter State / Province / Region" name="state" value ="Put DB state here" >
    </div>
    
    <div class = "form-group">
    <label for="pcode"><span class="label-req">*</span>ZIP/ Postal Code: </label>
        <input class = "form-control" type="text" id="pcode" placeholder="Enter ZIP / Postal Code" name="pcode" value ="Put DB pcode here"required>
    </div>
    
    <div class = "form-group">
    <label for="country"><span class="label-req">*</span>Country: </label>
<select required name="country" value ="Put DB country here">
      <option value="AF">Afghanistan</option>
      <option value="AX">Aland Islands</option>
      <option value="AL">Albania</option>
      <option value="DZ">Algeria</option>
      <option value="AS">American Samoa</option>
      <option value="AD">Andorra</option>
      <option value="AO">Angola</option>
      <option value="AI">Anguilla</option>
      <option value="AQ">Antarctica</option>
      <option value="AG">Antigua and Barbuda</option>
      <option value="AR">Argentina</option>
      <option value="AM">Armenia</option>
      <option value="AW">Aruba</option>
      <option value="AU">Australia</option>
      <option value="AT">Austria</option>
      <option value="AZ">Azerbaijan</option>
      <option value="BS">Bahamas</option>
      <option value="BH">Bahrain</option>
      <option value="BD">Bangladesh</option>
      <option value="BB">Barbados</option>
      <option value="BY">Belarus</option>
      <option value="BE">Belgium</option>
      <option value="BZ">Belize</option>
      <option value="BJ">Benin</option>
      <option value="BM">Bermuda</option>
      <option value="BT">Bhutan</option>
      <option value="BO">Bolivia</option>
      <option value="BQ">Bonaire</option>
      <option value="BA">Bosnia and Herzegovina</option>
      <option value="BW">Botswana</option>
      <option value="BV">Bouvet Island</option>
      <option value="BR">Brazil</option>
      <option value="IO">British Indian Ocean Territory</option>
      <option value="BN">Brunei Darussalam</option>
      <option value="BG">Bulgaria</option>
      <option value="BF">Burkina Faso</option>
      <option value="BI">Burundi</option>
      <option value="KH">Cambodia</option>
      <option value="CM">Cameroon</option>
      <option value="CA">Canada</option>
      <option value="CV">Cape Verde</option>
      <option value="KY">Cayman Islands</option>
      <option value="CF">Central African Republic</option>
      <option value="TD">Chad</option>
      <option value="CL">Chile</option>
      <option value="CN">China</option>
      <option value="CX">Christmas Island</option>
      <option value="CC">Cocos (Keeling) Islands</option>
      <option value="CO">Colombia</option>
      <option value="KM">Comoros</option>
      <option value="CG">Congo</option>
      <option value="CD">Democratic Republic of Congo</option>
      <option value="CK">Cook Islands</option>
      <option value="CR">Costa Rica</option>
      <option value="CI">Cote d'Ivoire</option>
      <option value="HR">Croatia</option>
      <option value="CU">Cuba</option>
      <option value="CW">Curaçao</option>
      <option value="CY">Cyprus</option>
      <option value="CZ">Czech Republic</option>
      <option value="DK">Denmark</option>
      <option value="DJ">Djibouti</option>
      <option value="DM">Dominica</option>
      <option value="DO">Dominican Republic</option>
      <option value="EC">Ecuador</option>
      <option value="EG">Egypt</option>
      <option value="SV">El Salvador</option>
      <option value="GQ">Equatorial Guinea</option>
      <option value="ER">Eritrea</option>
      <option value="EE">Estonia</option>
      <option value="ET">Ethiopia</option>
      <option value="FK">Falkland Islands (Malvinas)</option>
      <option value="FO">Faroe Islands</option>
      <option value="FJ">Fiji</option>
      <option value="FI">Finland</option>
      <option value="FR">France</option>
      <option value="GF">French Guiana</option>
      <option value="PF">French Polynesia</option>
      <option value="TF">French Southern Territories</option>
      <option value="GA">Gabon</option>
      <option value="GM">Gambia</option>
      <option value="GE">Georgia</option>
      <option value="DE">Germany</option>
      <option value="GH">Ghana</option>
      <option value="GI">Gibraltar</option>
      <option value="GR">Greece</option>
      <option value="GL">Greenland</option>
      <option value="GD">Grenada</option>
      <option value="GP">Guadeloupe</option>
      <option value="GU">Guam</option>
      <option value="GT">Guatemala</option>
      <option value="GG">Guernsey</option>
      <option value="GN">Guinea</option>
      <option value="GW">Guinea-Bissau</option>
      <option value="GY">Guyana</option>
      <option value="HT">Haiti</option>
      <option value="HM">Heard Island and McDonald Islands</option>
      <option value="VA">Holy See (Vatican City State)</option>
      <option value="HN">Honduras</option>
      <option value="HK">Hong Kong</option>
      <option value="HU">Hungary</option>
      <option value="IS">Iceland</option>
      <option value="IN">India</option>
      <option value="ID">Indonesia</option>
      <option value="IR">Iran</option>
      <option value="IQ">Iraq</option>
      <option value="IE">Ireland</option>
      <option value="IM">Isle of Man</option>
      <option value="IL">Israel</option>
      <option value="IT">Italy</option>
      <option value="JM">Jamaica</option>
      <option value="JP">Japan</option>
      <option value="JE">Jersey</option>
      <option value="JO">Jordan</option>
      <option value="KZ">Kazakhstan</option>
      <option value="KE">Kenya</option>
      <option value="KI">Kiribati</option>
      <option value="KP">Democratic People's Republic of Korea</option>
      <option value="KR">Republic of Korea</option>
      <option value="KW">Kuwait</option>
      <option value="KG">Kyrgyzstan</option>
      <option value="LA">Lao People's Democratic Republic</option>
      <option value="LV">Latvia</option>
      <option value="LB">Lebanon</option>
      <option value="LS">Lesotho</option>
      <option value="LR">Liberia</option>
      <option value="LY">Libya</option>
      <option value="LI">Liechtenstein</option>
      <option value="LT">Lithuania</option>
      <option value="LU">Luxembourg</option>
      <option value="MO">Macao</option>
      <option value="MK">Macedonia, the former Yugoslav Republic of</option>
      <option value="MG">Madagascar</option>
      <option value="MW">Malawi</option>
      <option value="MY">Malaysia</option>
      <option value="MV">Maldives</option>
      <option value="ML">Mali</option>
      <option value="MT">Malta</option>
      <option value="MH">Marshall Islands</option>
      <option value="MQ">Martinique</option>
      <option value="MR">Mauritania</option>
      <option value="MU">Mauritius</option>
      <option value="YT">Mayotte</option>
      <option value="MX">Mexico</option>
      <option value="FM">Micronesia</option>
      <option value="MD">Moldova</option>
      <option value="MC">Monaco</option>
      <option value="MN">Mongolia</option>
      <option value="ME">Montenegro</option>
      <option value="MS">Montserrat</option>
      <option value="MA">Morocco</option>
      <option value="MZ">Mozambique</option>
      <option value="MM">Myanmar</option>
      <option value="NA">Namibia</option>
      <option value="NR">Nauru</option>
      <option value="NP">Nepal</option>
      <option value="NL">Netherlands</option>
      <option value="NC">New Caledonia</option>
      <option value="NZ">New Zealand</option>
      <option value="NI">Nicaragua</option>
      <option value="NE">Niger</option>
      <option value="NG">Nigeria</option>
      <option value="NU">Niue</option>
      <option value="NF">Norfolk Island</option>
      <option value="MP">Northern Mariana Islands</option>
      <option value="NO">Norway</option>
      <option value="OM">Oman</option>
      <option value="PK">Pakistan</option>
      <option value="PW">Palau</option>
      <option value="PS">Palestinian Territory</option>
      <option value="PA">Panama</option>
      <option value="PG">Papua New Guinea</option>
      <option value="PY">Paraguay</option>
      <option value="PE">Peru</option>
      <option value="PH">Philippines</option>
      <option value="PN">Pitcairn</option>
      <option value="PL">Poland</option>
      <option value="PT">Portugal</option>
      <option value="PR">Puerto Rico</option>
      <option value="QA">Qatar</option>
      <option value="RE">Réunion</option>
      <option value="RO">Romania</option>
      <option value="RU">Russian Federation</option>
      <option value="RW">Rwanda</option>
      <option value="BL">Saint Barthélemy</option>
      <option value="SH">Saint Helena</option>
      <option value="KN">Saint Kitts and Nevis</option>
      <option value="LC">Saint Lucia</option>
      <option value="MF">Saint Martin (French part)</option>
      <option value="PM">Saint Pierre and Miquelon</option>
      <option value="VC">Saint Vincent and the Grenadines</option>
      <option value="WS">Samoa</option>
      <option value="SM">San Marino</option>
      <option value="ST">Sao Tome and Principe</option>
      <option value="SA">Saudi Arabia</option>
      <option value="SN">Senegal</option>
      <option value="RS">Serbia</option>
      <option value="SC">Seychelles</option>
      <option value="SL">Sierra Leone</option>
      <option value="SG">Singapore</option>
      <option value="SX">Sint Maarten (Dutch part)</option>
      <option value="SK">Slovakia</option>
      <option value="SI">Slovenia</option>
      <option value="SB">Solomon Islands</option>
      <option value="SO">Somalia</option>
      <option value="ZA">South Africa</option>
      <option value="GS">South Georgia and the South Sandwich Islands</option>
      <option value="SS">South Sudan</option>
      <option value="ES">Spain</option>
      <option value="LK">Sri Lanka</option>
      <option value="SD">Sudan</option>
      <option value="SR">Suriname</option>
      <option value="SJ">Svalbard and Jan Mayen</option>
      <option value="SZ">Swaziland</option>
      <option value="SE">Sweden</option>
      <option value="CH">Switzerland</option>
      <option value="SY">Syrian Arab Republic</option>
      <option value="TW">Taiwan</option>
      <option value="TJ">Tajikistan</option>
      <option value="TZ">Tanzania</option>
      <option value="TH">Thailand</option>
      <option value="TL">Timor-Leste</option>
      <option value="TG">Togo</option>
      <option value="TK">Tokelau</option>
      <option value="TO">Tonga</option>
      <option value="TT">Trinidad and Tobago</option>
      <option value="TN">Tunisia</option>
      <option value="TR">Turkey</option>
      <option value="TM">Turkmenistan</option>
      <option value="TC">Turks and Caicos Islands</option>
      <option value="TV">Tuvalu</option>
      <option value="UG">Uganda</option>
      <option value="UA">Ukraine</option>
      <option value="AE">United Arab Emirates</option>
      <option value="GB">United Kingdom</option>
      <option value="US">United States</option>
      <option value="UM">United States Minor Outlying Islands</option>
      <option value="UY">Uruguay</option>
      <option value="UZ">Uzbekistan</option>
      <option value="VU">Vanuatu</option>
      <option value="VE">Venezuela, Bolivarian Republic of</option>
      <option value="VN">Viet Nam</option>
      <option value="VG">Virgin Islands, British</option>
      <option value="VI">Virgin Islands, U.S.</option>
      <option value="WF">Wallis and Futuna</option>
      <option value="EH">Western Sahara</option>
      <option value="YE">Yemen</option>
      <option value="ZM">Zambia</option>
      <option value="ZW">Zimbabwe</option>
    </select>
    </div>
    <hr>
    <h2><span class="label-req">*</span>Tickets <button type="button" class="btn btn-success center-line" onclick="addPaidTicket()" >Add Ticket</button> <button type="button" class="btn btn-warning center-line" onclick="removeLast()" >Remove Last Ticket</button></h2>
    
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
    <button type="submit" class="btn btn-primary center-block">Save Changes</button><br>
    <button function="delete.php" class="btn btn-danger center-block">Delete Event</button>
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
