<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link type="text/css" href="<?= base_url('css/estilo.css'); ?>" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Latest compiled and minified JavaScript 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          
        </div>


        
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="">crautos.com</a></li>
            <li><a href="">Registrarse</a></li>
            <li ><a href="">Login</a></li>
            
          </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>
    </head>
    <body>
      <br>
      <br>
      <br>
      <div class="container theme-showcase" role="main">
        <br>
        
        <div class="page-header">
          <h1>Login</h1>
        </div>
        
        <div class="container">
          <form action="/action_page.php">
            <div class="form-group">
              <label for="email">Nombre Completo:</label>
              <input type="text" class="form-control" id="email" placeholder="Digite su nombre" name="nombre" required autofocus="autofocus">
            </div>
            <div class="form-group">
              <label for="pwd">Primer Apellido:</label>
              <input type="password" class="form-control" id="pwd" placeholder="Digite su Primer Apellido" name="primer_apellido">
            </div>
            <div class="form-group">
              <label for="pwd">Segundo Apellido:</label>
              <input type="password" class="form-control" id="pwd" placeholder="Digte su Segundo Apellido" name="segundo_apellido">
            </div>

            <div class="form-group">
              <label for="pwd">Usuario:</label>
              <input type="password" class="form-control" id="pwd" placeholder="Digte su usuario, ejemplo: tigresito" name="segundo_apellido">
            </div>
            
              <div class="form-group">
              <label for="pwd">Contraseña:</label>
              <input type="password" class="form-control" id="pwd" placeholder="Digte su contraseña" name="contrasena">
            </div>
            

            <input type="submit" value="Registrarse" class="btn btn-default">
            
          </form>
        </div>
        
        </div> <!-- /container -->
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="../../dist/js/bootstrap.min.js"></script>
        <script src="../../assets/js/docs.min.js"></script>
    
        <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
        -->
      </body>
      <br>
      <br>
      <br>
      <br>
      <!--footer start from here-->
      <footer id="foot">
        <div id="foot" class="container">
          <div class="row">
            <div class="col-md-4 col-sm-6 footerleft ">
              
              <p><i class="fa fa-phone"></i> Contacto (Costa Rica) : 2252 6768</p>
              <p><i class="fa fa-envelope"></i> E-mail : info@crautos.com</p>
              
            </div>
            <div class="col-md-2 col-sm-6 paddingtop-bottom">
              <p><i class="fa fa-envelope"></i> Todos Los Derechos Reservados:</p>
              <p><i class="fa fa-envelope"></i>Kevin Rodriguez 2017</p>
            </div>
            <div class="col-md-3 col-sm-6 paddingtop-bottom">
              <p><i class="fa fa-envelope"></i> Contactenos en Facebook</p>
              
              <div class="col-md-3 col-sm-6 paddingtop-bottom">
                <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-height="300" data-small-header="false" style="margin-bottom:15px;" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                  <div class="fb-xfbml-parse-ignore">
                    <blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/crautos/">Facebook</a></blockquote>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </footer>
        <!--footer start from here-->
</html>