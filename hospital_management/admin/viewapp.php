<?php
include ('../functions.php');

$sql = "SELECT doctorid, doctorSpecialization, appointmentDate, appointmentTime FROM appointment";
$result = $db->query($sql);
?>



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


            <small>
           
                       &nbsp; <a href="create_user.php"> + add user</a>
          </small>


        <?php endif ?>
      </div>
    </div>
</ul>

<?php
 if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Doctor id</th>";
                echo "<th>Doctor Specialization</th>";
                echo "<th>Appointment Date</th>";
                echo "<th>Appointment Time</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['doctorid'] . "</td>";
                echo "<td>" . $row['doctorSpecialization'] . "</td>";
                echo "<td>" . $row['appointmentDate'] . "</td>";
                echo "<td>" . $row['appointmentTime'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
}
?>