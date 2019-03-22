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
           <div class="col-md-12">

             <form class="form-group pull-left" method="post" action="connect.php" enctype="multipart/form-data">
               <fieldset>
                 <legend><h1>Add Track</h1></legend>
                 <div class="row">
                 <div class="col-md-6">
                   <label for="title">Track Name:</label>
                   <input type="text" class="form-control" id="title" placeholder="Enter Tack" name="title">
                   <label for="artist">Artist Name:</label>
                   <input type="text" class="form-control" id="artist" placeholder="Enter Artist" name="artist">
                   <label for="album">Album Title:</label>
                   <input type="text" class="form-control" id="album" placeholder="Enter Album" name="album">
                   <label for="genre">Genre:</label>
                   <input type="text" class="form-control" id="genre" placeholder="Enter Genre" name="genre">
                   <label for="year">Year:</label>
                   <input type="text" class="form-control" id="year" placeholder="Enter Year" name="year">
                 </div>
                 <div class="col-md-3">
                   <div class="form-group">
                     <label for="artwork" class="form-inline">Album Artwork:</label>
                     <input type="file" class="form-control-file" id="artwork" name="artwork">
                   </div>
                 </div>
                 <div class="col-md-3">
                 <button class="btn btn-primary right" type="submit" name="submit" value="Submit">Upload <i class="glyphicon glyphicon-upload"></i></button>
               </div>
               </div>

             </fieldset>
             </form>

         </div>
       </div>
     </div>
   </div>
 </main>
 </body>
 </html>
