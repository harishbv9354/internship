<?php
    include 'conn.php';
	$query="SELECT * FROM `users`";
	$result=mysqli_query($con,$query);
	$json_data=array();//declare as array//
	while($row=mysqli_fetch_assoc($result)){//provide jason at one time//
		$json_data[]=$row;//elements stored in json data//
	}
		echo json_encode($json_data);//making to jason//json_decode is string//
?>