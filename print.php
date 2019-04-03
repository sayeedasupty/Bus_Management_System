<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Welcome to Simoom Ticketing System</title>

<link rel="stylesheet" type="text/css" href="xres/css/style.css" />

<link rel="stylesheet" href="vallenato/vallenato.css" type="text/css" media="screen" charset="utf-8">
<link href="css/demo.css" rel="stylesheet" type="text/css" />
<link href="css/datepicker.css" rel="stylesheet" type="text/css" />



<script type="text/javascript" src="xres/js/saslideshow.js"></script>
<script type="text/javascript" src="xres/js/slideshow.js"></script>
<script src="js/jquery-1.5.min.js" type="text/javascript" charset="utf-8"></script>
<script src="vallenato/vallenato.js" type="text/javascript" charset="utf-8"></script>

<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=400, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>Inel Power System</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 400px; font-size:12px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>

</head>

<body>

<div id="wrapper">
	<div id="header">
    <h1><a href="index.php"><img src="xres/images/logo.png" class="logo" alt="Simoom Ticketing System" /></a></h1>
        <ul id="mainnav">
			<li class="current"><a href="index.php">Home</a></li>
            <li><a href="routes.php">Routes</a></li>
            <li><a href="contact.php">Contact Us</a></li>
    	</ul>
	</div>
    <div id="content">
    	<div id="rotator">
				<ul>
                    <li class="show"><img src="xres/images/jb2/01.jpg" width="861" height="379"  alt="" /></li>
                    <li><img src="xres/images/jb2/02.jpg" width="861" height="379"  alt="" /></li>
                    <li><img src="xres/images/jb2/03.jpg" width="861" height="379"  alt="" /></li>
                    <li><img src="xres/images/jb2/04.jpg" width="861" height="379"  alt="" /></li>
				</ul>
			  
				<div id="logo" style="left: 390px; height: auto; top: 23px; width: 460px; position: absolute; z-index:4;">

					<h2 class="accordion-header" style="height: 18px; margin-bottom: 15px; color: rgb(255, 255, 255); background: none repeat scroll 0px 0px rgb(53, 48, 48);">Booking Ticket</h2>
					<div class="accordion-content" style="margin-bottom: 15px;">

						Print and present this details upon boarding the bus<br><br>
						<a href="javascript:Clickheretoprint()">Print</a>
							<div id="print_content" style="width: 400px;">
								<strong>Ticket Reservation Details</strong><br><br>
									<?php
									include('db.php');
									$id=$_GET['id'];
									$setnum=$_GET['setnum'];
									$result = mysql_query("SELECT * FROM customer WHERE transactionum='$id'");
									while($row = mysql_fetch_array($result))
										{
											echo 'Transaction Number: '.$row['transactionum'].'<br>';
											echo 'Name: '.$row['fname'].' '.$row['lname'].'<br>';
											echo 'Address: '.$row['address'].'<br>';
											echo 'Contact: '.$row['contact'].'<br>';
											echo 'Payable: '.$row['payable'].'<br>';
										}
									$results = mysql_query("SELECT * FROM reserve WHERE transactionnum='$id'");
									while($rows = mysql_fetch_array($results))
										{
											$ggagaga=$rows['bus'];
											echo 'Route and Type of Bus: ';
											$resulta = mysql_query("SELECT * FROM route WHERE id='$ggagaga'");
											while($rowa = mysql_fetch_array($resulta))
												{
													echo $rowa['route'].'     :'.$rowa['type'].'<br>';
													$time=$rowa['time'];
												}
											echo 'Time of Departure: '.$time;
											echo '<br>';
											echo 'Seat Number: '.$setnum.'<br>';
											echo 'Date Of Travel: '.$rows['date'].'<br>';
											
										}
									?>
							</div>
					</div>	
				</div>
		</div>
	</div>	
				<div id="footer">
					<h4>Call for Booking: 01924400249 &bull; <a href="contact-us.php">Kallyanpur, Mirpur, Dhaka</a></h4>
					<p>Hours of Operation&nbsp;&nbsp;&bull;&nbsp;&nbsp;Sun - Thu: 60:00 am - 12:00 pm</p>
					<a href="index.php"><img src="xres/images/footer-logo.jpg" alt="Simoom Ticketing System" /></a>
					<p>&copy; Copyright 2015 Simoom Bus Ticketing System | All Rights Reserved <br /></p>
				</div>
</div>
</body>
</html>