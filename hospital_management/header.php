<?php
	include('functions.php');
	//include('navbar.php');


?>

<!doctype html>
<html lang="en">

<head>
	<title>Welcome To Admin Dashboard</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="../assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="../assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<!-- <link rel="stylesheet" href="assets/css/demo.css"> -->
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">



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
  background-color:  #145214;
}

.header{
  background-color: #1a651a;
}

.profile_info{
  float: right;
}
th{
  background-color: #008060;

}
table, th, td {
  border: 1px solid black;
}
th, td {
  padding: 15px;
  text-align: center;
}
input, textarea {
  width : 150px;
  margin: 0;
  box-sizing: border-box;
}


    </style>

</head>

<body>
	
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->

		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="index.php" ><i class="lnr lnr-home"></i> <span>Home</span></a></li>
					
					
						<li><a href="donor.php" class=""><i class="lnr lnr-alarm"></i> <span>Non Active Donors</span></a></li>
						
						<li><a href="active_donors.php" class=""><i class="lnr lnr-alarm"></i> <span>Active Donors</span></a></li>

          <small>
            <i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
            <br>
            <a href="index.php?logout='1'" style="color: red;">logout</a>
          </small>
						
					</ul>
				</nav>
			</div>
		</div>

</div>

</body>
</html>