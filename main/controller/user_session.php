<?php 
class user_session{
    
    private static  $instance       =   NULL;
    
    public function __construct(){
        session_start();
        $_SESSION['REGLAMENTO'] = array();
    }
    
    public function setCurrentID($id){
        $_SESSION['REGLAMENTO']['ID_USUARIO']      = $id;
    }
    
    public function setCurrentUserCodSicom($codsicom){
        $_SESSION['REGLAMENTO']['CODSICOM']  = $codsicom;
    }
    
    public function getCurrentUserSicom(){
        return $_SESSION['REGLAMENTO']['CODSICOM'];
    }
    
    public function getCurrentIdSession(){
        return $_SESSION['REGLAMENTO']['ID_USUARIO'];
    }
    
    public static function getInstance()
    {
        if (!self::$instance instanceof self ) {
            self::$instance = new user_session();
        }
        return user_session::$instance;
    }
    
    public function closeSession(){
        session_unset();
        session_destroy();
    }
}


?>