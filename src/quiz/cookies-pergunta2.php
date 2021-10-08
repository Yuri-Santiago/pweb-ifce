<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Pergunta 2</title>
</head>
<body>
    <?php
        setcookie("pergunta1", $_POST["pergunta1"]);
    ?>
    <div id="conteudo">
        <h2>Pergunta 2</h2>
        <h3>Qual o nome das duas avós do Irmão do Jorel?</h3>
        <form action="cookies-pergunta3.php" method="post" onsubmit="return validaForm()">
            <input type="radio" name="pergunta2" value="Josi e Júlia">Josi e Júlia<br>
            <input type="radio" name="pergunta2" value="Gege e Jojo">Gege e Jojo<br>
            <input type="radio" name="pergunta2" value="Juju e Gigi">Juju e Gigi<br>
            <input type="radio" name="pergunta2" value="Jojo e Juju">Jojo e Juju<br>
            <br>
            <input type="submit" name="enviar" value="Enviar">
        </form>
        <br>
        <img src="imagens/img2.jpg" alt="irmão do jorel com avós"  width="384" height="216">
    </div>
<script>
    function validaForm(){
        var radios = document.getElementsByName("pergunta2");
        var formValido = false;

        var i = 0;
        while (!formValido && i < radios.length) {
            if(radios[i].checked) formValido = true;
            i++;        
        }

        if (!formValido) alert("Por favor, escolha uma opção");
        return formValido;
    }
</script>
</body>
</html>