<?php 

require 'functions/blogController.php';

// Llamado a la clase para blog
$setPost = new blog();

$id = 1;
// Impresion de post
$post = $setPost->printPost($id);

// Llamado de pruebas para imprimir y conocer ordenamientos en arreglos
// $setPost->printArray($post);

// Impresion de autor de blog
$autor = $setPost->nombreAutor();

 ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
    
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Title Project</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500italic,500,700,900,700italic,900italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="libs/Bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="libs/Bootstrap-validation/css/formValidation.min.css">
        <link rel="stylesheet" href="css/main.css">

        <!-- media-queries.js (fallback) -->
        <!--[if lt IE 9]>
            <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>           
        <![endif]-->

        <!--[if lt IE 9]>
            <script src="dist/html5shiv.js"></script>
        <![endif]-->

    </head>
    <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Brand</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                <?php 

//                 while($row = mysql_fetch_array($db->_result)){
//                 $num = $db->nom['id'];

// echo <<<HTML
// <li><a href="#">$row</a></li>
// HTML;

//                 }

                 ?>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
      </div>
    </div>

    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title">The <?php echo $autor; ?> Blog</h1>
        <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
            <h2 class="blog-post-title"><?php echo $post['title']; ?></h2>
            <p class="blog-post-meta"><?php echo date($post['datepost']); ?> by <a href="#"><?php echo $autor; ?></a></p>

            <p><?php echo $post['content']; ?></p>
            
          </div><!-- /.blog-post -->

          <nav>
            <ul class="pager">
              <li><a href="#">Previous</a></li>
              <li><a href="#">Next</a></li>
            </ul>
          </nav>

        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>
          <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
              <li><a href="#">March 2014</a></li>
              <li><a href="#">February 2014</a></li>
              <li><a href="#">January 2014</a></li>
              <li><a href="#">December 2013</a></li>
              <li><a href="#">November 2013</a></li>
              <li><a href="#">October 2013</a></li>
              <li><a href="#">September 2013</a></li>
              <li><a href="#">August 2013</a></li>
              <li><a href="#">July 2013</a></li>
              <li><a href="#">June 2013</a></li>
              <li><a href="#">May 2013</a></li>
              <li><a href="#">April 2013</a></li>
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->

    <footer class="blog-footer">
      <p>Blog template built for <a href="http://getbootstrap.com">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>
        
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="libs/jQuery/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/loader.js"></script>

        <script src="bootstrap/js/bootstrap.min.js"></script>
        
        <script src="libs/Moments/min/moment.min.js"></script>
        <script src="libs/Moments/locale/es.js"></script>
        <script src="libs/Bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
        
        <script src="libs/Bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
        
        <script src="libs/Bootstrap-validation/js/formValidation.min.js"></script>
        <script src="libs/Bootstrap-validation/js/framework/bootstrap.min.js"></script>
        <script src="libs/Bootstrap-validation/js/language/es_ES.js"></script>
        
        <script src="js/main.js"></script>

    </body>
</html>