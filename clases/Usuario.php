<?php

require_once("../constantes/constantes.php");
//require_once '../funciones/funciones.php';
date_default_timezone_set("America/Lima");

session_start();

class Usuario {

    private $_misql;
    public $usuario;

    public function __construct() {
        $this->_misql = new MiSQL;
    }

    public function validar($reg) {
        $usuario = htmlentities($reg['usuario']);
        $clave = md5(htmlentities($reg['clave']));
        $this->_misql->sql = "SELECT * " ;
        $this->_misql->sql.= "FROM v_usuario ";
        $this->_misql->sql.="WHERE usuario='$usuario' AND clave='$clave' ";
        //echo $this->_misql->sql;
        $this->_misql->conectar();
        $this->_misql->ejecutar();
        if ($this->_misql->numeroRegistros() > 0) {
            $datos = $this->_misql->devolverArreglo();
            $_SESSION = $datos[0];
            //$_SESSION["id"] = $datos[0]["id"];

            $this->_misql->liberarYcerrar();
            return 1;
        }
        else
            return 0;
    }

    public function obtenerUsuarioXdni($dni) {
        $this->_misql->sql = "SELECT * FROM v_usuario WHERE usuario='$dni' AND tabla='persona'";
        $this->_misql->ejecutar();
        return mysqli_fetch_assoc($this->_misql->rs);
    }

}