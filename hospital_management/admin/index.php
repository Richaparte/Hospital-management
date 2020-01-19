<?php 
include('../functions.php');
//include('../navbar.php');
if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: ../login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ../login.php");
}
?>
<!--!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<style>
	.header {
		background: #003366;
	}
	button[name=register_btn] {
		background: #003366;
	}
	</style>
</head>
<body>
	<div class="header">
		<h2>Admin - Home Page</h2>
	</div>
	<div class="content">
		
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		
		<div class="profile_info">
			<img src="../images/admin_profile.png"  >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="home.php?logout='1'" style="color: red;">logout</a>
                       &nbsp; <a href="create_user.php"> + add user</a>
					</small>

				<?php endif ?>
			</div>
		</div>
	</div>
</body>
</html-->



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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #008055;
}

.header{
  background-color: #1a651a;
}

.profile_info{
  float: right;
}


    </style>


    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
<body id="myPage">
  <ul>
  <li><a class="active" href="index.php">Home</a></li>

  <li><a href="viewapp.php">View appointment</a></li>

  <li><a href="bb.php">Blood bank</a></li>
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


<div class="w3-display-container w3-animate-opacity">
  <img src="../img/11.jpg" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
  <div class="w3-container w3-display-bottomleft w3-margin-bottom">  
    
  </div>
</div>
<div class="w3-container w3-padding-64 w3-center" id="team">
<h2>Welcome Admin</h2>



<div class="w3-container w3-padding-64 w3-center" id="team">
<h2>Founders</h2>


<div class="w3-row" style="background-color:pink"><br>

<div class="w3-third class">
  <img src="../img/super_founder.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Richa Parte</h3>
  <p>M.D</p>
</div>

<div class="w3-third class">
  <img src="../img/2.jpg" alt="Boss" style="width:75%" class="w3-circle w3-hover-opacity">
  <h3>Aditya Popat</h3>
  <p>M.D</p>
</div>

<div class="w3-third class">
  <img src="../img/3.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Saurabh Agrawal</h3>
  <p>M.S</p>
</div>


</div>
</div>

<div class="w3-row-padding w3-padding-64 w3-theme-l1" id="work">

<div class="w3-quarter">
<h2>Motto</h2>
<p>A patient is the most important person in our hospital. He is not an interruption to our work. He is the purpose of it. He is not an outsider in our hospital, he is part of it. We are not doing him a favor by serving him, he is doing us a favor by giving us an opportunity to do so.</p>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <img src="../img/j.jpg" alt="Snow" style="width:100%">
  <div class="w3-container">
  <h3>Cancer survivor</h3>
  <h4>Julie</h4>
  <p>I had lost all hopes</p>
  <p>but the dctors held on</p>
  <p>I have got a new life</p>
  <p>from here</p>
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <img src="../img/h.jpg" alt="Lights" style="width:100%">
  <div class="w3-container">
  <h3>Happy patients</h3>
  <h4>Christy</h4>
  <p>Feels more like</p>
  <p>a luxurious resort</p>
  <p>highly professional</p>
  <p>staff and doctors</p>
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <img src="../img/i.jpg" alt="Mountains" style="width:100%">
  <div class="w3-container">
  <h3>Happy patients</h3>
  <h4>Tina</h4>
  <p>I hated hospitals</p>
  <p>but this one gave</p>
  <p>me umost care</p>
  <p>Best for teens</p>
  </div>
  </div>
</div>

</div>

<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
  <h4>Follow Us</h4>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
  <a class="w3-button w3-large w3-teal w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>
  
  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>   
    <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
</footer>



</body>
</html>