

<!DOCTYPE html>
<html lang="pt-br"
<head> 
<meta charset="UTF-8">
<meta http-equiv="X-UA-compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>document</title>
</head>
<body>
<form action="">
    numero:<input type="text" name="numero"><br>
    <input type="submit" value="verificar">
</form>

</body>
</html>

<?php 
$numero = $_GET['numero'];
echo"<br>{$numero}";

if($numero % 2 == 0){
    echo"<br>o numero {$numero} é par";
}else{
    echo"<br>o numero {$numero} é impar";
}



?>