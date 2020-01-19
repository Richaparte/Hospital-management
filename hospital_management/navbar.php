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
    <!--link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    
    <style type="text/css">
      ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #00cc7a;
}

li {
  float: left;
}

li a {
  display: block;
  color: white  ;
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
  <li><a href="donor.php">Blood Bank</a></li>
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
