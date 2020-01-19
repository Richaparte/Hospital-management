<?php
include 'functions.php';
global $db;

if (isset($_GET['search_text'])) {
 $search_text = $_GET['search_text'];
}



if (!empty($search_text)) {

		if ($db) {
			if(MySQLi_select_db($db , 'multi_login')){
				//echo "yayy!";

				$query = "SELECT `name` from `names` where `name` LIKE '". mysqli_real_escape_string ( $db ,$search_text )."%' ";
				$result = mysqli_query($db, $query);
				if (mysqli_num_rows($result) > 0) {
	            while($query_row = mysqli_fetch_assoc($result)) {
	               //echo $name = $query_row['name'].'<br>';
	              
	               echo $name ='<a href="department1.php?search_text='.$query_row['name'].'">'.$query_row['name'].'</a><br>';

	            }

	         } 

			}	
		}




}

?>