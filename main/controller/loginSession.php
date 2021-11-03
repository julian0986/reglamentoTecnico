<?php 
    include_once 'conexion.php';
    include_once 'user_session.php';
class loginSession extends conexion{
        
        private String                          $id;
        private String                          $codsicom;
        private String                          $password;   
        private static $instance                  = NULL;
        
        private conexion         $objeto;
        private user_session     $uSession;
       
        
        public function __construct(){
            $this->objeto       = conexion::getInstance();
        }
        
        public static function getInstance()
        {
            if (!self::$instance instanceof self ) {
                self::$instance = new loginSession();
            }
            return loginSession::$instance;
        }
        
       
        public function login_check($codsicom,$password){
            $boolean    = false;
            $conexion   = $this->objeto->Conectar();
            
            $pass = md5($password);
            $consulta   = "SELECT idUsuario, codsicom, password FROM proyect5_reglamento.usuario WHERE codsicom='$codsicom' AND password='$pass' and estado = '1' ";
             
            
            $resultado  = $conexion -> prepare($consulta);
            $resultado->execute();
            
            if($resultado->rowCount() >= 1)
            {
                $boolean    = true;
                $id_u       = "";
                $data       = $resultado->fetchAll(PDO::FETCH_ASSOC);
                foreach ($data as $row)
                {
                    $id_u   =  $row["idUsuario"];
                }
            }else
            {
                $boolean                    =   false;
                $conexion                   =   null;
            }
            
            return $boolean;
        }
        
        public function setCodsicom($a){
            $this->codsicom = $a;
        }
        
        public function setPassword($a){
            $this->password = $a;
        }
    }


   
       /* $login      = loginSession::getInstance();
        $uSession   = user_session::getInstance();
       
        if($_POST['submit']=='logout_rt'){
            $uSession->closeSession();
            $uSession = null;
            //header("location: ../../index.php");
        }
        
        if(isset($_SESSION['REGLAMENTO']['CODSICOM']))
        {
        }else if(isset($_POST['codsicom']) && isset($_POST['password'])){
            
            $codsicom = ((isset($_POST['codsicom']))  ? $_POST['codsicom'] : '');
            $password = ((isset($_POST['password']))   ? $_POST['password'] : '');
            if($login->login_check($codsicom, $password))
            {
                $uSession->setCurrentUserCodSicom($codsicom);
                $uSession->setCurrentID(session_id());
                $login->setCodsicom($codsicom);
                //echo "Entra Session Usuario: ".$uSession->getCurrentUser()."<br/>ID: ".$uSession->getCurrentIdSession()."<br/>";
                //header("location: ../index.php");
                include_once '../index.php'; 
            }else{
                $errorLogin = "Codigo Sicom y/o Contraseña incorrectos <br/> Por favor verifique la informacion digitada";
                echo $errorLogin;
                //header("location: ../../index.php");
            }
        }
        else{
                echo "$ Session";
                //header("location: ../../index.php");
        }*/
?>