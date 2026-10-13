<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    $ba = $_POST["base"];
    $alt = $_POST ["altezza"];


    $perimetro = ($alt*2) + ($ba*2);
    $area = $alt*$ba;
    $diagonale = round(sqrt (pow($alt,2)+ pow($ba,2)),2);

    
    echo "perimetro = "; 
    echo $perimetro;
    echo "<br>";
    echo "<br>";
    echo "area = ";
    echo $area;
    echo "<br>";
    echo "<br>";
    echo "diagonale = ";
    echo $diagonale;


        




    ?>
    
</body>
</html>