<?php
	include('dbinc.php'); 
	$mysqli = new mysqli('localhost', 'root', '', 'courser') or die(mysqli_error($mysqli));
	
	
	
	if (isset($_POST['save'])){
		$course_id = $_POST['course_id'];
		$review_name = mysqli_real_escape_string($conn,$_POST['review_name']);
		$review_email = mysqli_real_escape_string($conn,$_POST['review_email']);
		$review_id = $_POST['review_id'];
		$review_title = mysqli_real_escape_string($conn,$_POST['review_title']);
		$review_text = mysqli_real_escape_string($conn,$_POST['review_text']);
		$review_rating = $_POST['review_rating'];
		
		$mysqli->query("INSERT INTO reviews (course_id, review_name, review_email, review_id, review_text, review_rating, review_title) VALUES('$course_id', '$review_name', '$review_email', '$review_id', '$review_text', '$review_rating', '$review_title')")or die($mysqli->error);
		
		header('location: reviewall.php');
	}
?>
