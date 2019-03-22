<?php

include('dbConnect.php');

?>

<!DOCTYPE html>
<html>
<head>
  <title>Music Database</title>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css"/>
  <link rel="stylesheet" href="css/nav.css" type="text/css"/>
  <link rel="stylesheet" href="css/music.css" type="text/css"/>
  <link rel="stylesheet" href="css/song.css" type="text/css"/>
  <script src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/music.js"></script>
  <script>

    function nextSong(id) {
      var newID = id + 1;
      window.location.href="song.php?id=" + newID;
      var rows = <?php
      $sql = "SELECT * FROM Song";
      if ($result = mysqli_query($conn, $sql)) {
        $rowcount=mysqli_num_rows($result);
        echo $rowcount;
      }
      ?>;
      if (newID > rows) {
        window.location.href="song.php?id=1";
      }
    }

    function prevSong(id) {
      var newID = id - 1;
      window.location.href="song.php?id=" + newID;
      var rows = <?php
      $sql = "SELECT * FROM Song";
      if ($result = mysqli_query($conn, $sql)) {
        $rowcount = mysqli_num_rows($result);
        echo $rowcount;
      }
      ?>;
      if (newID <= 0) {
        window.location.href="song.php?id=" + rows;
      }
    }

    function redirect($url) {
      header("Location: $url");
    }
  </script>
</head>
<body>
  <header>
    <?php

    include('navbar.php');

    ?>
  </header>
  <main>
    <div class="panel-body">
      <div class="pagewidth container-fluid">
        <div class="row">
          <?php

          if (isset($_GET['id'])) {
            $sql = "SELECT * FROM Song, Album WHERE Song.songID = ".$_GET['id']." AND Song.album = Album.name";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
              while($rows = mysqli_fetch_array($result)) {

                echo'
                <h1>'.$rows['title'].'</h1><hr>
                <div class="col-md-4">
                <h4>Aritst: <em>'.$rows['artist'].'</em></h4>
                <h4>Album: <em>'.$rows['album'].'</em></h4>
                <h4>Release Date: <em>'.$rows['year'].'</em></h4>
                </div>
                <div class="col-md-4">

                </div>
                <div class="col-md-4">
                <img class="album_art" src="data:image/jpeg;base64,'.base64_encode($rows['artwork']).'"/>
                <form action="remove.php" method="post">
                <button class="btn btn-danger" type="submit" name="deleteThis" value="'.$_GET['id'].'">Remove Song</button>
              </form>
              </div>';
              }

            }
          }


          ?>


        </div>
        <div class="row">
          <div class=col-md-12><br>
            <?php

            echo'
            <button class="btn btn-primary left" onclick="prevSong('.$_GET['id'].')" type="button"><span class="glyphicon glyphicon-chevron-left"></span></button>
            <button class="btn btn-primary right" onclick="nextSong('.$_GET['id'].')" type="button"><span class="glyphicon glyphicon-chevron-right"></span></button>';
            ?>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>
</html>
