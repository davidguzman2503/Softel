<?php
include '../database/db.php';
class login {
    private $conexion;
    private $lista;
    public function __CONSTRUCT()
    {
        $this -> conexion=Conectar::conexion();
        $this -> lista=array();
    }
    public function sesion ($user, $pass){
        
         $sql = $this ->conexion -> query ("SELECT id FROM login WHERE usname = '$user' and pass = '$pass';");
        while ($row = $sql -> fetch_assoc () )
        {
            $this -> lista [] =$row;
        }
        
    return $this ->lista;
    }
}
