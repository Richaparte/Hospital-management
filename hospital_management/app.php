<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'multi_login');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if(isset($_POST['submit']))
{
$specilization=$_POST['Doctorspecialization'];
$doctorid=$_POST['doctor'];
$userid=$_SESSION['id'];
$fees=$_POST['fees'];
$appdate=$_POST['appdate'];
$time=$_POST['apptime'];
$userstatus=1;
$docstatus=1;
$query=mysqli_query($con,"insert into appointment(doctorSpecialization,doctorId,userId,consultancyFees,appointmentDate,appointmentTime,userStatus,doctorStatus) values('$specilization','$doctorid','$userid','$fees','$appdate','$time','$userstatus','$docstatus')");
if($query)
{
echo "<script>alert('Your appointment successfully booked');</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>User  | Book Appointment</title>
<script>
function getdoctor(val) {
$.ajax({
type: "POST",
url: "get_doctor.php",
data:'specilizationid='+val,
success: function(data){
$("#doctor").html(data);
}
});
}
</script>


<script>
function getfee(val) {
$.ajax({
type: "POST",
url: "get_doctor.php",
data:'doctor='+val,
success: function(data){
$("#fees").html(data);
}
});
}
</script>
</head>
<body>
<form role="form" name="book" method="post" >



<div class="form-group">
<label for="DoctorSpecialization">
Doctor Specialization
</label>
<select name="Doctorspecialization" class="form-control" onChange="getdoctor(this.value);" required="required">
<option value="">Select Specialization</option>
<?php $ret=mysqli_query($con,"select * from doctorspecilization");
while($row=mysqli_fetch_array($ret))
{
?>
<option value="<?php echo htmlentities($row['specilization']);?>">
<?php echo htmlentities($row['specilization']);?>
</option>
<?php } ?>

</select>
</div>




<div class="form-group">
<label for="doctor">
Doctors
</label>
<select name="doctor" class="form-control" id="doctor" onChange="getfee(this.value);" required="required">
<option value="">Select Doctor</option>
</select>
</div>





<div class="form-group">
<label for="consultancyfees">
Consultancy Fees
</label>
<select name="fees" class="form-control" id="fees"  readonly>

</select>
</div>

<div class="form-group">
<label for="AppointmentDate">
Date
</label>
<input class="form-control datepicker" name="appdate"  required="required" data-date-format="yyyy-mm-dd">

</div>

<div class="form-group">
<label for="Appointmenttime">

Time

</label>
<input class="form-control" name="apptime" id="timepicker1" required="required">eg : 10:00 PM
</div>

<button type="submit" name="submit" class="btn btn-o btn-primary">
Submit
</button>
</form>
<script>
jQuery(document).ready(function() {
Main.init();
FormElements.init();
});

$('.datepicker').datepicker({
    format: 'yyyy-mm-dd',
    startDate: '-3d'
});
</script>
 <script type="text/javascript">
            $('#timepicker1').timepicker();
        </script>
<!-- end: JavaScript Event Handlers for this page -->
<!-- end: CLIP-TWO JAVASCRIPTS -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>

</body>
</html>