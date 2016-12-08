<?php
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" type="image/x-icon" href="/../assets/favicon.ico" />
  <title>КИНО</title>
  <link href="/../assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="/../assets/css/style.css" rel="stylesheet">
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
          <li class="active"><a>Дискография <span class="sr-only">(current)</span></a></li>
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
  <!--  START ALBUMS -->
    <div class="well">Альбомы</div>
    <div class="row">
      <?php foreach ($albums as $album): ?>
      <div class="col-xs-2">
        <?php echo date('Y', strtotime($album->published)); ?> год
      </div>
      <div class="col-xs-10">
        <div class="panel panel-default">
          <div class="panel-heading"><?php echo $album->title; ?></div>
          <div class="panel-body">
            <div class="row">
              <div class="col-xs-3">
                <img src="<?php echo $album->img; ?>" class="img-thumbnail" alt="">
              </div>
              <div class="col-xs-9">
                <ul>
                  <li>«Группа крови»</li>
                  <li>«Закрой за мной дверь, я ухожу»</li>
                  <li>«Война»</li>
                  <li>«Спокойная ночь»</li>
                  <li>«Мама, мы все тяжело больны»</li>
                  <li>«Бошетунмай»</li>
                  <li>«В наших глазах»</li>
                  <li>«Попробуй спеть вместе со мной»</li>
                  <li>«Прохожий»</li>
                  <li>«Дальше действовать будем мы»</li>
                  <li>«Легенда»</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <!--  END ALBUMS -->
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