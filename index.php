<?php 
include_once './main/controller/loginSession.php';
include_once './main/controller/user_session.php';
//include_once './main/login.php';

$login      = loginSession::getInstance();
$uSession   = user_session::getInstance();

if(isset($_SESSION['REGLAMENTO']['CODSICOM']))
{
    
}else{
    if(isset($_POST['codsicom']) || isset($_POST['password']))
    {
        if($_POST['codsicom'] != '' || $_POST['password'] != '' )
        {
            $codsicom = ((isset($_POST['codsicom']))  ? $_POST['codsicom'] : '');
            $password = ((isset($_POST['password']))   ? $_POST['password'] : '');
            if($login->login_check($codsicom, $password))
            {
                
                $uSession->setCurrentUserCodSicom($codsicom);
                $uSession->setCurrentID(session_id());
                $login->setCodsicom($codsicom);
                
                $encript = base64_encode($_POST['codsicom']);
                header("location: ./main/index.php?rt=$encript");
                //require_once './main/index.php';
            }else
            {
                $errorLogin = "Codigo Sicom y/o Contraseña incorrectos";
                include_once './main/login.php';
            }
        }else{
            if(isset($_POST['submit'])){
                $errorLogin = "No se aceptan Campos Vacios";
                include_once './main/login.php';
            }
        }
    }else{
            $errorLogin = "No se aceptan Valores Nulos";
            include_once './main/login.php';
    }
}

?>
