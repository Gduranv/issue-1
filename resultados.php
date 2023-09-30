<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cantidadEmpleados = $_SESSION["cantidad_empleados"];

    $totalMujeres = 0;
    $totalHombresCasadosMasDe2500 = 0;
    $totalMujeresViudasMasDe1000 = 0;
    $sumaEdadHombres = 0;
    $totalHombres = 0;

    for ($i = 1; $i <= $cantidadEmpleados; $i++) {
        $nombre = $_POST["nombre$i"];
        $edad = $_POST["edad$i"];
        $estadoCivil = $_POST["estado_civil$i"];
        $genero = $_POST["genero$i"];
        $sueldo = $_POST["sueldo$i"];

        if ($genero == "femenino") {
            $totalMujeres++;
            if ($estadoCivil == "viudo" && $sueldo == "entre_1000_y_2500" || $estadoCivil == "viudo" && $sueldo == "mas_de_2500") {
                $totalMujeresViudasMasDe1000++;
            }
        } elseif ($genero == "masculino") {
            $totalHombres++;
            $sumaEdadHombres += $edad;
            if ($estadoCivil == "casado" && $sueldo == "mas_de_2500") {
                $totalHombresCasadosMasDe2500++;
            }
        }
    }

    $edadPromedioHombres = ($totalHombres > 0) ? ($sumaEdadHombres / $totalHombres) : 0;
    echo "<h1>Resultados</h1>";
    echo "<p>Total de empleados de genero femenino: $totalMujeres</p>";
    echo "<p>Total de hombres casados que ganan más de 2500bs: $totalHombresCasadosMasDe2500</p>";
    echo "<p>Total de mujeres viudas que ganan más de 1000bs: $totalMujeresViudasMasDe1000</p>";
    echo "<p>Edad promedio de los hombres: $edadPromedioHombres</p>";
} else {
    header("Location: formulario.html");
    exit;
}
?>
