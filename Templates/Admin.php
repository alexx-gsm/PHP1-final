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
          <li><a href="/"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span></a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <!-- END MAIN NAV -->

  <div class="container">

    <div class="divide-20"></div>
    <div class="well">Админка</div>
    <div>
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#images" aria-controls="images" role="tab" data-toggle="tab">Галерея</a></li>
        <li role="presentation"><a href="#albums" aria-controls="albums" role="tab" data-toggle="tab">Дискография</a></li>
      </ul>

      <div class="divide-20"></div>

      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="images">
          <fieldset>
            <legend>Добавить картинку</legend>
            <form class="form-horizontal" action="/App/saveImage.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="title" class="col-sm-2 control-label">Название</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="title" name="title" placeholder="Название" required>
                </div>
              </div>
              <div class="form-group">
                <label for="file" class="col-sm-2 control-label">Картинка</label>
                <div class="col-sm-10 btn-load">
                  <input type="file" id="file" name="file">
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default">Добавить</button>
                </div>
              </div>
            </form>
          </fieldset>
          <div class="divide-20"></div>
          <hr>
          <table class="table table-striped table-responsive gallery-list">
            <thead>
            <tr>
              <td width="5%">id</td>
              <td width="10%">Картинка</td>
              <td>Название</td>
              <td width="10%">Категория</td>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($images as $image): ?>
                <tr>
                  <td><?php echo $image->getId(); ?></td>
                  <td><img src="<?php echo $image->path; ?>" class="img-thumbnail" alt=""></td>
                  <td><?php echo $image->title; ?></td>
                  <td><?php echo $image->category; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
        </div>

        <div role="tabpanel" class="tab-pane" id="albums">
          <fieldset>
            <legend>Добавить альбом</legend>
            <form class="form-horizontal" action="/App/saveAlbum.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="title" class="col-sm-2 control-label">Название</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="title" name="title" placeholder="Название" required>
                </div>
              </div>
              <div class="form-group">
                <label for="file" class="col-sm-2 control-label">Картинка</label>
                <div class="col-sm-10 btn-load">
                  <input type="file" id="file" name="file">
                </div>
              </div>
              <div class="form-group">
                <label for="published" class="col-sm-2 control-label">Год издания</label>
                <div class="col-sm-10 btn-load">
                  <select class="form-control" id="date" name="published">
                    <?php for ($year = date('Y'); $year >= 1970; $year--): ?>
                    <option><?php echo $year; ?></option>
                    <?php endfor; ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default">Добавить</button>
                </div>
              </div>
            </form>
          </fieldset>
          <div class="divide-20"></div>
          <hr>
          <table class="table table-striped">
            <thead>
            <tr>
              <td width="5%">id</td>
              <td width="10%">Год</td>
              <td width="10%">Обложка</td>
              <td>Название</td>
              <td width="1%"></td>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($albums as $album): ?>
              <tr>
                <td><?php echo $album->getId(); ?></td>
                <td><?php echo date('Y', strtotime($album->published)); ?></td>
                <td><img src="<?php echo $album->img; ?>" class="img-thumbnail" alt=""></td>
                <td><?php echo $album->title; ?></td>
                <td></td>
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
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