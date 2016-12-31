<?php
/**
 * Eliminar todas la variables de Sessión y destruye la Sesión
 *
 */

session_start();
session_unset();
session_destroy();

header('Location: login.php');
?>
