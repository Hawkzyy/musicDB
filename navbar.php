<?php
// Universal Echo to be used as an included file with PHP

echo '
<nav class="navbar navbar-default">

  <div class="col-md-4 noshrink">
    <div class="logoFont">
      <a class="navbar-brand pull-left" href="musicDB.php?field=songID">Music Library</a>
    </div>
  </div>
  <div class="col-md-3">
    <form class="pull-left">
      <div class="input-group">
        <input class ="form-control" name="search" type="text" placeholder="Search" onsubmit="searchBar();">
        <div class= "input-group-btn">
          <button type="text" class="btn btn-primary">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </div>
      </div>
    </form>
  </div>
  <div class="col-md-5">
    <ul class="nav navbar-nav pull-right">
      <li><a href="add.php"><span class="glyphicon glyphicon-upload"></span> Add Track</a></li>
    </ul>
  </div>
</nav>';

?>
