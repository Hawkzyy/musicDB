<?php

  include('dbConnect.php');


	if (isset($_POST['submit'])) {

    $target = "images/".basename($_FILES['artwork']['nameA']);

		$title = strip_tags($_POST['title']);
		$artist = strip_tags($_POST['artist']);
		$album = strip_tags($_POST['album']);
		$genre = strip_tags($_POST['genre']);
		$year = $_POST['year'];
    $artwork = addslashes(file_get_contents($_FILES['artwork']['tmp_name'])); //SQL Injection defence!


		$sql = "INSERT INTO Song (title, artist, album, genre, year) VALUES ('$title','$artist','$album','$genre','$year')";
    $sqlA = "INSERT INTO Album (name, artwork, year) VALUES ('$album','$artwork','$year')";


    if ($conn->query($sql) === TRUE) {
        echo 'New Record created';
    } else {
      echo "Error:" .$sql. "<br>". $conn->error;
    }

    if ($conn->query($sqlA) === TRUE) {
        echo 'New Record created';

    } else {
      echo "Error:" .$sqlA. "<br>". $conn->error;
    }

    if (move_uploaded_file($_FILES['artwork']['tmp_name'], $target)) {
      echo "Image uploaded succesfully";
    } else {
      header('Location: musicDB.php');
      echo "Error:" .$sqlA. "<br>". $conn->error;

    }








}


?>
