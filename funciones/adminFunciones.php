<?php

require_once "fechas.php";
require_once("../clases/cnx.php");
include_once "../clases/mysql.php";

function getValue($array, $campo) {
    return (isset($array[$campo])) ? $array[$campo] : '';
}

function createSqlScript($dataSave, $p) {
    parse_str($dataSave, $dataSave);
    $cadSQL = "";
    $interSQL = "";
    $finalSQL = "";
    // Obtenemos la estructura de la tabla
    $oSQL = new MiSQL();
    $oSQL->conectar();
    $oSQL->ejecutar("SHOW COLUMNS FROM $p");
    $estructura = $oSQL->devolverArreglo();
    $oSQL->cerrar();
    // -----------------------------------
    $idInst = $dataSave["c_".$p."_id"];
    if ($idInst == 0) {
        $cadSQL = "INSERT INTO $p (";
        $interSQL = ") VALUES (";
    }
    else {
        $cadSQL = "UPDATE $p SET ";
        $finalSQL = " WHERE id=" . $idInst;
    }
    foreach ($dataSave as $key => $value) {
        $key = str_replace("c_".$p."_", "", $key);
        if ($key != 'id') {
            $actualizaCampo = true;
            switch ($key) {
                case "superadmin":
                    $value = ($value == "on") ? 1 : 0;
                    break;
                case "clave":
                    if (strlen($value)==0) $actualizaCampo = false;
                    else $value = md5($value);
                    break;
            }
            $tipo = infoColumn($estructura, $key, "Type");
            switch ($tipo) {
                case "date":
                    $value = fechaEspIng($value);
                    break;
                case "tinyint(1)":
                    $value = ($value == "on") ? 1 : 0;
                    break;
            }
            if ($idInst == 0) {
                $cadSQL .= $key . ", ";
                $interSQL .= "'" . $value . "', ";
            }
            else {
                if ($actualizaCampo) $cadSQL .= $key . "='" . $value . "', ";
            }
        }
    }
    if (strlen($interSQL)>0) $interSQL = substr($interSQL, 0, strlen($interSQL)-2) . ")";
    $cadSQL = substr($cadSQL, 0, strlen($cadSQL)-2) . $interSQL . $finalSQL;

    return $cadSQL;
}

function infoColumn($estructura, $key, $camporetorno) {
    $_result = "..";
    foreach ($estructura as $registro) {
        if ($registro["Field"] == $key) {
            $_result = $registro[$camporetorno];
            break;
        }
    }
    return $_result;
}