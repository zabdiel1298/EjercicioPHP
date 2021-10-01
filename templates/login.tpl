<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>{$titulo}</title>
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
        <link rel="shortcut icon" href="favicon.png">
    </head>
    <body>
        <div class="login-box">
          <form action="login.php" method="post">
             <h1>Iniciar Sesion</h1>
             <div class="textbox">
                    <i class="fa fa-user" aria-hidden="true"></i>
                     <input type="text" class placeholder="Usuario" id="usuario" name="usuario" required>
             </div>
                <div class="textbox">
                     <i class="fas fa-lock"></i>
                     <input type="password" placeholder="Contraseña" id="password" name="password" required>
                </div>
                    <input class="btn" type="submit" id="login" >
          </form>
        </div>  
    </body>
</html>
<script type="text/javascript">
 function validar(){ 
                var formvalido=true;
                var usuario=document.getElementById('usuario').value;
                var password=document.getElementById('password').value;
                    if(usuario==""){
                    alert('Error..usuario vacio');
                        }
                    else if(password==""){
                        alert('Error..contraseña vacía');
                    }
                     return formvalido;
                    }
</script>