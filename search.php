<?php

if (isset($_GET['search'])) {

	$searchVal = $_GET['search'];
	$sql = "SELECT * FROM Song WHERE title LIKE '%$searchVal%' OR artist LIKE
	'%$searchVal%' OR album LIKE '%$searchVal%' OR genre LIKE '%$searchVal%' OR year LIKE '%$searchVal%'";
	$result = mysqli_query($conn, $sql);

} else if (isset($_GET['id'])) {

	$sql = "SELECT * FROM Song WHERE songID = ".$_GET['id']."";
	$result = mysqli_query($conn, $sql);

} else {

	include('sorting.php');

}

?>
