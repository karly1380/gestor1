
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
  <title>ACUA-PETS</title>
   <!--Made with love by Mutiullah Samim -->
   
  <!--Bootsrap 4 CDN-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <!--Custom styles-->
  <link rel="stylesheet" type="text/css"  href="1.css">
</head>
<body>
<div class="container">
  <div class="d-flex justify-content-center h-100">
    <div class="card">
      <div class="card-header">
        <br>
        <h3>Iniciar Sesión</h3>
        <p align="center">
          <img src="img/logo.gif" id="icon" alt="160" width="160"  />
        <br>
        </p>

        <div class="d-flex justify-content-end social_icon">
            <a class="nav-link" href="http://www.faceboock.com/">
              <span class="fab fa-facebook-square"></span> 
            </a>
            <a class="nav-link" href="http://www.google.com/">
              <span class="fab fa-google-plus-square"></span> 
            </a>
            <a class="nav-link" href="http://www.twitter.com/">
              <span class="fab fa-twitter-square"></span> 
            </a>
        </div>
      </div>

      <div class="card-body">
        <form>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="username">   
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" class="form-control" placeholder="password">
          </div>

          <div class="form-group">
            <input type="submit" value="Entrar" class="btn float-right login_btn" >
          </div>

        </form>
        


      </div>
      <div class="card-footer">
        <div class="d-flex justify-content-center links">
          ¿No tienes una Cuenta?<a href="registro.php">Registrar</a>
        </div>
        <div class="d-flex justify-content-center">
          <a href="#">Olvidaste tu Contraseña?</a>
        </div>
      </div>
    </div>
  </div>
</div>



<script src="librerias/js/jquery-3.5.1.min.js"></script>
  <script src="librerias/sweetalert.min.js"></script>


  <script type="text/javascript">
    function logear(){
      $.ajax({
        type:"POST",
        data:$('#frmLogin').serialize(),
        url:"procesos/usuario/login/login.php",
        success:function(respuesta){
          
          respuesta = respuesta.trim();
          if(respuesta == 1){
            window.location = "vistas/inicio.php";
          }else{
            swal("Error al Ingresar :(");
          }
        }
      });

      return false;
    }
  </script>
</body>
</html>