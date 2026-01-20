<html>
<head>
    <title>Ejercicio 2: Banquete - La Langosta Ahumada</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h3>LA LANGOSTA AHUMADA</h3>
    
    <form method="post">
        Numero de personas: <input type="text" name="numero_personas"><br><br>
        <input type="submit" value="Calcular Presupuesto">
    </form>
    
    <?php
    if($_POST){
        $numero_personas = $_POST['numero_personas'];
        
        echo "<br>Numero de personas: " . $numero_personas . "<br><br>";
        
        //determinar costo por persona segun cantidad
        $costo_por_persona = 0;
        
        if($numero_personas <= 200){
            $costo_por_persona = 95.00;
        } else {
            if($numero_personas <= 300){
                $costo_por_persona = 85.00;
            } else {
                $costo_por_persona = 75.00;
            }
        }
        
        //calcular presupuesto total
        $presupuesto_total = $numero_personas * $costo_por_persona;
        
        echo "Costo por persona: $" . $costo_por_persona . "<br>";
        echo "Presupuesto total: $" . $presupuesto_total . "<br>";
    }
    ?>
</body>
</html>