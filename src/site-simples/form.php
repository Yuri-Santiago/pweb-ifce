<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Contato</title>
</head>
<body>
    <div id="navegacao">
        <h1 class="titulo_navegacao">Contato</h1>
        <ul id="navegacao">
            <li><a href="index.html">Página Inicial</a></li>
            <li><a href="sobre.html">Sobre</a></li>
            <li><a href="recurso-extra.html">Meu Recurso Extra</a></li>
            <li id="selecionado"><a href="contato.html">Contato</a></li>            
        </ul>
    </div>
    <div id="conteudo">
        <h1>Obrigado!</h1>
        <p class="tamanho_20">Agradeço por ter entrado em contato <?php echo $_GET["nome"];?>.</p><br>
        <p class="tamanho_20">Irei responder seu comentário pelo seu e-mail cadastrado: <?php echo $_GET["email"];?>.</p>  
    </div>
</body>
</html>