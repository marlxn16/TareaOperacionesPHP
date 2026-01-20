<html>
<head>
    <title>Ejercicio 5: Horas Trabajadas</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h3>CALCULO DE HORAS TRABAJADAS</h3>
    
    <form method="post">
        Nombre del empleado: <input type="text" name="nombre_empleado"><br><br>
        Pago por hora: <input type="text" name="pago_por_hora"><br><br>
        <input type="submit" value="Ingresar Horas">
    </form>
    
    <?php
    if($_POST && !isset($_POST['horas'])){
        $nombre_empleado = $_POST['nombre_empleado'];
        $pago_por_hora = $_POST['pago_por_hora'];
        
        echo "<br><h3>Ingrese las horas trabajadas:</h3>";
        echo "<form method='post'>";
        echo "<input type='hidden' name='nombre_empleado' value='$nombre_empleado'>";
        echo "<input type='hidden' name='pago_por_hora' value='$pago_por_hora'>";
        
        //generar campos para los 6 dias
        for($dia = 1; $dia <= 6; $dia++){
            echo "Dia " . $dia . ": <input type='text' name='dia" . $dia . "'> horas<br><br>";
        }
        
        echo "<input type='hidden' name='horas' value='si'>";
        echo "<input type='submit' value='Calcular Sueldo'>";
        echo "</form>";
    }
    
    if(isset($_POST['horas'])){
        $nombre_empleado = $_POST['nombre_empleado'];
        $pago_por_hora = $_POST['pago_por_hora'];
        
        echo "<br>Empleado: " . $nombre_empleado . "<br>";
        echo "Pago por hora: $" . $pago_por_hora . "<br><br>";
        
        //total de horas trabajadas
        $total_horas = 0;
        
        //ciclo para los 6 dias de la semana
        for($dia = 1; $dia <= 6; $dia++){
            $horas = $_POST['dia' . $dia];
            
            echo "Dia " . $dia . ": " . $horas . " horas<br>";
            
            $total_horas = $total_horas + $horas;
        }
        
        echo "<br>";
        
        //calcular sueldo
        $sueldo_total = $total_horas * $pago_por_hora;
        
        echo "Total de horas trabajadas: " . $total_horas . " horas<br>";
        echo "Sueldo total: $" . $sueldo_total . "<br>";
    }
    ?>
</body>
</html>