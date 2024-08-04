<?php
require_once 'config/conexion.php';
require_once 'autoload.php';
require_once 'config/parameters.php';
require_once 'public/views/layout/header.php';

$nombre_controlador = null;
$nombre_accion = null;

// Determinar el controlador
if (isset($_GET['controller'])) {
    $nombre_controlador = $_GET['controller'] . 'Controller';
} elseif (!isset($_GET['controller']) && !isset($_GET['action'])) {
    $nombre_controlador = controller_default;
    $nombre_accion = action_default;
};

// Verificar si la clase del controlador existe
if (class_exists($nombre_controlador)) {
    $controlador = new $nombre_controlador;

    // Determinar la acción
    if (isset($_GET['action'])) {
        $nombre_accion = $_GET['action'];
    } elseif ($nombre_accion === null) {
        $nombre_accion = action_default;
    }

    // Verificar si la acción existe en el controlador
    if (method_exists($controlador, $nombre_accion)) {
        $controlador->$nombre_accion();
    } else {
        echo "La página que buscas no existe";
    }
};

require_once 'public/views/layout/footer.php';

?>
