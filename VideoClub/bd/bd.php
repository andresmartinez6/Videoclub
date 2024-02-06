<?php

    class conectar{
        public static function conexion(){
            $conexion=new msqli("localhost","root","","series");
            $conexion->set_charset("utf-8");
            return $conexion;
        }
    }

?>