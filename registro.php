<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["cantidad_empleados"])) {
    $cantidadEmpleados = (int)$_POST["cantidad_empleados"];
    $_SESSION["cantidad_empleados"] = $cantidadEmpleados;
    
    header("Location: form_empleados.php");
    exit;
} else {
    header("Location: formulario.html");
    exit;
}
?>

