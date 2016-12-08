<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" type="image/x-icon" href="/assets/favicon.ico" />
  <title>КИНО</title>
  <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/css/style.css" rel="stylesheet">
</head>
<body>
<div class="wrapper">
  <!-- START MAIN NAV -->
  <nav class="navbar navbar-inverse">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">КИНО</a>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="/">Главная</a></li>
          <li><a href="/App/Controllers/Gallery.php">Галерея</a></li>
          <li><a href="/App/Controllers/Albums.php">Дискография</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="/App/Controllers/Admin.php"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <!-- END MAIN NAV -->

  <div class="divide-20"></div>

  <div class="container">
    <!--  START IMAGE -->
    <div class="well">Галерея</div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3><?php echo $image->title; ?></h3>
      </div>
      <div class="panel-body">
        <a href="<?php echo $image->path; ?>">
          <figure>
            <img src="<?php echo $image->path; ?>" class="img-thumbnail" alt="">
          </figure>
        </a>
      </div>
      <div class="panel-footer">
        <div class="btn-group" role="group" aria-label="...">
          <a href="/" type="button" class="btn btn-default">Главная</a>
          <a href="/App/Controllers/Gallery.php" type="button" class="btn btn-default">Галерея</a>
          <a href="/App/Controllers/Albums.php" type="button" class="btn btn-default">Дискография</a>
        </div>
      </div>
    </div>
    <!--  END  IMAGE -->
  </div>
</div>

<div class="divide-20"></div>

<div class="footer container-fluid">
  &copy; Цой жив!
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="/../assets/js/bootstrap.min.js"></script>
</body>
</html>