<?php

include_once '../clases/Usuario.php';

try {
    $oUsuario = new Usuario();
    if(!$oUsuario->validar($_POST)){
        echo 'Error: Usuario o Clave Incorrectos';
    }
} catch (Exception $e) {
    echo $e->getMessage();
}

?>