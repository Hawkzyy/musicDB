<?php

  include('dbConnect.php');

if(isset($_POST['deleteThis'])) {

  $delete = $_POST['deleteThis'];
  $sql = "DELETE FROM Song WHERE songID='$delete'";
  $sqlA = "DELETE FROM Album WHERE albumID='$delete'";
  $alterSong = "ALTER TABLE Song AUTO_INCREMENT=1";
  $alterAlbum = "ALTER TABLE Album AUTO_INCREMENT=1";

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

  if ($conn->query($alterSong) === TRUE) {
      echo 'New Record created';
  } else {
      echo "Error:" .$alterSong. "<br>". $conn->error;
  }

  if ($conn->query($alterAlbum) === TRUE) {
      echo 'New Record created';
  } else {
      echo "Error:" .$alterAlbum. "<br>". $conn->error;
  }

  header('Location: musicDB.php');

}


?>
