<?php
include('../functions.php');

if (isAdmin()) {
	header('location: admin_dashboard.php');
}


?>