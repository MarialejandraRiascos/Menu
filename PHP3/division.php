<html>      
<head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIVISIÖN</title>
</head>
<body>
    <form action="" method="Post">
        <h1> DIVISIÖN </h1>
        Ingrese el primer numero:
        <input type="number" name="numero1"><br><br>
        Ingrese el segundo numero:
        <input type="number" name="numero2"><br><br>
        <input type="submit" value="Resultado">
    </form>
</body>
</html>
<?php

$total;
$total = $_REQUEST['numero1']/$_REQUEST['numero2'];
echo "El total de la división es: ".$total; 

?> 