<?php 
    include_once 'conexion.php';
    include_once 'user_session.php';
class loginSession extends conexion{
        private                          $id;
        private                          $codsicom;
        private                          $password;   
        private static $instance                  = NULL;
        private          $objeto;
        private      $uSession;
        
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
            $resultado  = $conexion->prepare($consulta);
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
?>