<?php
//include('navbar.php');
include('functions.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
   
    <title>Hospital Management System</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    <!--link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    <script type="text/javascript">
		function findmatch() {
			if (window.XMLHttpRequest) {
				xmlhttp = new XMLHttpRequest();
			}
			else{
				xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
			}

			xmlhttp.onreadystatechange = function(){
				if (xmlhttp.readyState ==4 && xmlhttp.status ==200) {
					document.getElementById('results').innerHTML = xmlhttp.responseText;
				}
			}

			xmlhttp.open('GET','search.inc.php?search_text='+document.search.search_text.value,true);
			xmlhttp.send();
		}
	</script>

    <style type="text/css">
    	ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #1a651a;
}

li {
  float: left;
}

li a {
  display: block;
  color: white	;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #008055;
}
.profile_info{
  float: right;
}


body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}


    </style>


  </head>
<body>
	<ul>
  <li><a  href="index.php">Home</a></li>
  <li><a href="add_donor.php">Donate blood</a></li>

  <li><a href="book-appointment.php">Book an appointment</a></li>
  <li><a href="findadoctor.php" class="active">Find a doctor</a></li>
    <div class="profile_info">
      <img src="images/user_profile.png"  >
      <div>
        <?php  if (isset($_SESSION['user'])) : ?>
          <strong><?php echo $_SESSION['user']['username']; ?></strong>

          <small>
            <i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
            <br>
            <a href="index.php?logout='1'" style="color: red;">logout</a>
          </small>

        <?php endif ?>
      </div>
    </div>
</ul>

	
	<div class="conten">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						//echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
		<!-- logged in user information -->
	</div>


<br>
<br>
<center><h3>SELECT A DEPARTMENT</h3></center>


		<form id="search" name="search">
		Department name:<br>
		<input type="text" name="search_text" onkeyup="findmatch();">
	</form>

	<!-- !PAGE CONTENT! -->

	<div id="results" class="w3-row-padding w3-padding-16 w3-center"  style="max-width:1200px">
		
	</div>
  <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <div class="w3-quarter">
      <img src="images/cardiology.jpg" alt="c" style="width:100%">
      <h3>Cardiology</h3>
      <p>Provides medical care to patients who have problems with their heart or circulation.</p>
    </div>
    <div class="w3-quarter">
      <img src="images/neurology.jpg" alt="n" style="width:100%">
      <h3>Neurology</h3>
      <p>A medical specialty dealing with disorders of the nervous system. Specifically, it deals with the diagnosis and treatment of all categories of disease involving the central, peripheral, and autonomic nervous systems, including their coverings, blood vessels, and all effector tissue, such as muscle. Includes the brain, spinal cord, and spinal cord injuries (SCI).</p>
    </div>
    <div class="w3-quarter">
      <img src="images/anesthetics.jpg" alt="a" style="width:100%">
      <h3>Anesthetics</h3>
      <p>Doctors in this department give anesthetic for operations and procedures. An anesthetic is a drug or agent that produces a complete or partial loss of feeling. There are three kinds of anesthetic: general, regional and local.</p>
    </div>
    <div class="w3-quarter">
      <img src="images/cc.jpg" alt="c" style="width:100%">
      <h3>Chaplaincy</h3>
      <p>Chaplains promote the spiritual and pastoral wellbeing of patients, relatives and staff.</p>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
      <img src="images/gs.jpg" alt="g" style="width:100%">
      <h3>General Surgery</h3>
      <p>Covers a wide range of types of surgery and procedures on patients.</p>
    </div>
    <div class="w3-quarter">
      <img src="images/h.jpg" alt="h" style="width:100%">
      <h3>Haematology</h3>
      <p>These hospital services work with the laboratory. In addition doctors treat blood diseases and malignancies related to the blood.</p>
    </div>
    <div class="w3-quarter">
      <img src="images/n.jpg" alt="n" style="width:100%">
      <h3>Nephrology</h3>
      <p>Monitors and assesses patients with various kidney (renal) problems and conditions.</p>
    </div>
    <div class="w3-quarter">
      <img src="images/o.jpg" alt="o" style="width:100%">
      <h3>Orthopaedics</h3>
      <p> Treats conditions related to the musculoskeletal system, including joints, ligaments, bones, muscles, tendons and nerves.</p>
    </div>
  </div>

 
  
  <hr id="about">

  <!-- About Section -->
  <div class="w3-container w3-padding-32 w3-center">  
    <h3>About Us</h3><br>
    <img src="images/h2.jpg" alt="Me" class="w3-image" style="display:block;margin:auto" width="800" height="533">
    <div class="w3-padding-32">
      
 
      <p> The healthcare verticals of the company primarily comprise hospitals, diagnostics and day care specialty facilities. Currently, the company operates its healthcare delivery services in India, Dubai and Sri Lanka with 43 healthcare facilities (including projects under development), approximately 9,000 potential beds and over 400 diagnostics centres.

In a global study of the 30 most technologically advanced hospitals in the world, its flagship, the Memorial Research Institute’ (MRI), was ranked No.2, by ‘topmastersinhealthcare.com, and placed ahead of many other outstanding medical institutions in the world..</p>
    </div>
  </div>
  <hr>
  
  <!-- Footer -->

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>




</body>
</html>
