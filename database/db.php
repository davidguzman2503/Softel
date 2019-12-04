<?php





class Conectar{
    public static function conexion(){
        $conexion=new mysqli("remotemysql.com", "QKH7AX0DtV", "nhsLw9FypC", "QKH7AX0DtV");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}
?>