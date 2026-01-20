<html>
<head>
    <title>Ejercicio 4: Edad Promedio</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h3>EDAD PROMEDIO DE ALUMNOS</h3>
    
    <form method="post">
        Numero de alumnos: <input type="text" name="n"><br><br>
        <input type="submit" value="Ingresar Edades">
    </form>
    
    <?php
    if($_POST && !isset($_POST['edades'])){
        $n = $_POST['n'];
        
        echo "<br><h3>Ingrese las edades:</h3>";
        echo "<form method='post'>";
        echo "<input type='hidden' name='n' value='$n'>";
        
        //generar campos para ingresar edades
        for($f = 1; $f <= $n; $f++){
            echo "Edad del alumno " . $f . ": <input type='text' name='edad" . $f . "'><br><br>";
        }
        
        echo "<input type='hidden' name='edades' value='si'>";
        echo "<input type='submit' value='Calcular Promedio'>";
        echo "</form>";
    }
    
    if(isset($_POST['edades'])){
        $n = $_POST['n'];
        
        echo "<br>Numero de alumnos: " . $n . "<br><br>";
        
        //suma de edades
        $suma_edades = 0;
        
        //ciclo para sumar las edades
        for($f = 1; $f <= $n; $f++){
            $edad = $_POST['edad' . $f];
            
            echo "Edad del alumno " . $f . ": " . $edad . " años<br>";
            
            $suma_edades = $suma_edades + $edad;
        }
        
        echo "<br>";
        
        //calcular promedio
        $promedio = $suma_edades / $n;
        
        echo "Suma total de edades: " . $suma_edades . "<br>";
        echo "Edad promedio: " . $promedio . " años<br>";
    }
    ?>
</body>
</html>