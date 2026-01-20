<html>
<head>
    <title>Ejercicio 3: Fabricas El Cometa - articulos con clave</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h3>FABRICAS EL COMETA</h3>
    
    <form method="post">
        Clave del producto (1, 2, 3, 4, 5 o 6): <input type="text" name="clave"><br><br>
        Costo materia prima: <input type="text" name="materia_prima"><br><br>
        <input type="submit" value="Calcular Precio">
    </form>
    
    <?php
    if($_POST){
        $clave = $_POST['clave'];
        $materia_prima = $_POST['materia_prima'];
        
        echo "<br>Clave del producto: " . $clave . "<br>";
        echo "Costo materia prima: $" . $materia_prima . "<br><br>";
        
        //calcular mano de obra segun clave
        $mano_obra = 0;
        
        if($clave == 3 || $clave == 4){
            $mano_obra = $materia_prima * 0.75;
        } else {
            if($clave == 1 || $clave == 5){
                $mano_obra = $materia_prima * 0.80;
            } else {
                $mano_obra = $materia_prima * 0.85;
            }
        }
        
        //calcular gastos de fabricacion segun clave
        $gastos_fabricacion = 0;
        
        if($clave == 2 || $clave == 5){
            $gastos_fabricacion = $materia_prima * 0.30;
        } else {
            if($clave == 3 || $clave == 6){
                $gastos_fabricacion = $materia_prima * 0.35;
            } else {
                $gastos_fabricacion = $materia_prima * 0.28;
            }
        }
        
        //calcular costo de produccion
        $costo_produccion = $materia_prima + $mano_obra + $gastos_fabricacion;
        
        //calcular precio de venta
        $precio_venta = $costo_produccion + ($costo_produccion * 0.45);
        
        echo "Mano de obra: $" . $mano_obra . "<br>";
        echo "Gastos de fabricacion: $" . $gastos_fabricacion . "<br>";
        echo "Costo de produccion: $" . $costo_produccion . "<br>";
        echo "Precio de venta: $" . $precio_venta . "<br>";
    }
    ?>
</body>
</html>