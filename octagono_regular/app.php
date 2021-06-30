<html>
<head>
    <title>Octágono rectángulo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $perimetro = $_POST['perimetro'];
        $apotema = $_POST['apotema'];
   
        $area;
   
        $area = ($perimetro) * ($apotema) / 2;
   
        echo"<h1 align='center'>Resultado del area del triángulo rectángulo</h1>";
        echo"<h2 align='center'>El area es: $area<h2>";
        echo "<a href='index.html'>Volver</a>";
    


    
    ?>
</body>

</html>