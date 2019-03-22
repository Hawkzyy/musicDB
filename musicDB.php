<?php

include('dbConnect.php');
include('templates/header.php');

  //mysqli_close($conn);
?>

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
          <div class="col-md-12">
            <div>
              <table>
                <tr>
                  <th><!--Numbers --></th>
                  <th><a href="musicDB.php?field=title">Title</a></th>
                  <th><a href="musicDB.php?field=artist">Artist</a></th>
                  <th><a href="musicDB.php?field=album">Album</a></th>
                  <th><a href="musicDB.php?field=genre">Genre</a></th>
                  <th><a href="musicDB.php?field=year">Year</a></th>
                </tr>
                <?php

                include('search.php');

                if (mysqli_num_rows($result) > 0) {
                  while($row = mysqli_fetch_array($result)) {
                    echo '
                    <tr>
                    <td>'.$row['songID'].'</td>
                    <td><a href="song.php?id='.$row['songID'].'">'.$row['title'].'</a></td>
                    <td>'.$row['artist'].'</td>
                    <td>'.$row['album'].'</td>
                    <td>'.$row['genre'].'</td>
                    <td>'.$row['year'].'</td>
                    </tr>';

                  }
                } else {
                  echo '
                  <p>No results found.</p>
                  ';
                }

                ?>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>
</html>
