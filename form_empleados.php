<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Empleados</title>
</head>
<body>
    <h1>Numero Empleados</h1>
    <form action="resultados.php" method="post">
        <?php
        session_start();
        $cantidadEmpleados = $_SESSION["cantidad_empleados"];

        for ($i = 1; $i <= $cantidadEmpleados; $i++) {
            echo "<h2>Empleado $i</h2>";
            echo "<label for='nombre$i'>Nombre y Apellido:</label>";
            echo "<input type='text' name='nombre$i' required><br>";
            
            echo "<label for='edad$i'>Edad:</label>";
            echo "<input type='number' name='edad$i' required><br>";
            
            echo "<label for='estado_civil$i'>Estado Civil:</label>";
            echo "<select name='estado_civil$i' required>";
            echo "<option value='soltero'>Soltero</option>";
            echo "<option value='casado'>Casado</option>";
            echo "<option value='viudo'>Viudo</option>";
            echo "</select><br>";
            
            echo "<label for='genero$i'>genero:</label>";
            echo "<input type='radio' name='genero$i' value='femenino' required>Femenino";
            echo "<input type='radio' name='genero$i' value='masculino' required>Masculino<br>";
            
            echo "<label for='sueldo$i'>Sueldo:</label>";
            echo "<select name='sueldo$i' required>";
            echo "<option value='menos_de_1000'>Menos de 1000bs</option>";
            echo "<option value='entre_1000_y_2500'>Entre 1000 y 2500bs</option>";
            echo "<option value='mas_de_2500'>Más de 2500bs</option>";
            echo "</select><br>";
        }
        ?>
        <input type="submit" value="Registrar Empleados">
    </form>
</body>
</html>

