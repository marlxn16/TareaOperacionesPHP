<html>
<head>
    <title>Ejercicio 1: Precio de Uva</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h3>ASOCIACION DE VINICULTORES</h3>
    
    <form method="post">
        Precio inicial por kilo: <input type="text" name="precio_inicial"><br><br>
        Tipo de uva (A o B): <input type="text" name="tipo"><br><br>
        Tamaño (1 o 2): <input type="text" name="tamanio"><br><br>
        Kilos entregados: <input type="text" name="kilos"><br><br>
        <input type="submit" value="Calcular">
    </form>
    
    <?php
    if($_POST){
        $precio_inicial = $_POST['precio_inicial'];
        $tipo = $_POST['tipo'];
        $tamanio = $_POST['tamanio'];
        $kilos = $_POST['kilos'];
        
        echo "<br>Precio inicial por kilo: $" . $precio_inicial . "<br>";
        echo "Tipo de uva: " . $tipo . "<br>";
        echo "Tamaño: " . $tamanio . "<br>";
        echo "Kilos entregados: " . $kilos . "<br><br>";
        
        //calcular precio final por kilo
        $precio_final = 0;
        
        if($tipo == "A"){
            if($tamanio == 1){
                $precio_final = $precio_inicial + 0.20;
            } else {
                $precio_final = $precio_inicial + 0.30;
            }
        } else {
            if($tamanio == 1){
                $precio_final = $precio_inicial - 0.30;
            } else {
                $precio_final = $precio_inicial - 0.50;
            }
        }
        
        //calcular total a recibir
        $total_recibir = $precio_final * $kilos;
        
        echo "Precio final por kilo: $" . $precio_final . "<br>";
        echo "Total a recibir: $" . $total_recibir . "<br>";
    }
    ?>
</body>
</html>