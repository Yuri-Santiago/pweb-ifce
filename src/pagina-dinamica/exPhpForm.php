<!DOCTYPE HTML>  
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Estática</title>
</head>
<body>  

<?PHP

$nome = $_GET['txNome'];
$sexo = $_GET['rdSexo'];
$email = $_GET['txEmail'];
$webSite = $_GET['txWebsite'];
$comentario = $_GET['txAreaComentario'];

echo "Parâmetros da Requisição: " . "<br> <br>";

echo "Nome: "     . $nome      . "<br>"; 
echo "Sexo: "     . $sexo      . "<br>";
echo "<img src=\"$sexo\" alt=\"$sexo\" width=\"250\" height=\"150\"><br>";
echo "E-mail "    . $email     . "<br>";
echo "Website "   . $webSite   . "<br>";

echo "Comentário $comentario <br>";
echo 'Comentário $comentario <br>';

?>
</body>
</html>