<?php 

if(isset($_POST["submit"]))
{
   // echo "Se redireciona al Reglamento ";
    header("location: main/index.php");
   
}

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Reglamento Tecnico</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="./main/src/css/login.css">
        <link rel="shortcut icon" href="https://fendipetroleo.com/nuevoF/public/icon/favicon.ico">
    </head>

<body>
<div class="main">
    <div class="container">
        <center>
            <div class="middle">
                  <div id="login">
                    <form action="#" method="post">
                      <fieldset class="clearfix">
                        <p ><span class="fa fa-user"></span>
                        	<input type="text" Placeholder="Codigo Sicom" onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) )) return false;" maxlength="6" required>
                        </p> 
                        <p>
                        	<span class="fa fa-lock"></span>
                        	<input type="password" Placeholder="Contraseña" required>
                        </p>
                        <!-- JS because of IE support; better: placeholder="Password" -->
                       
                        <div>
                        <span style="width:100%; text-align:left; display: inline-block;">
                        	<button class="btn btn-primary" id="btnRegistrar" type="submit" name="submit" value="Entrar">Entrar</button>
                        </span>
                        </div>
                      </fieldset>
            		<div class="clearfix"></div>
            		</form>
            	<div class="clearfix"></div>
                </div> <!-- end login -->
                <div class="logo">
                  <img src="./main/src/img/Logo50f.png" alt="Fendipetroleo Nacional">
                  <div class="clearfix"></div>
                </div>
            </div>
        </center>
    </div>
</div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>