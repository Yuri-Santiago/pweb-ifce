<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Pergunta 5</title>
</head>
<body>
    <?php
        session_start();
        $_SESSION["pergunta4"] = $_POST["pergunta4"];
    ?>
    <div id="conteudo">
        <h2>Pergunta 5</h2>
        <h3>Qual a fruta favorita da avó do Irmão do Jorel?</h3>
        <form action="sessions-respostas.php" method="post" onsubmit="return validaForm()">
            <input type="radio" name="pergunta5" value="Jabuticaba">Jabuticaba<br>
            <input type="radio" name="pergunta5" value="Abacate">Abacate<br>
            <input type="radio" name="pergunta5" value="Maçã">Maçã<br>
            <input type="radio" name="pergunta5" value="Pera">Pera<br>
            <br>
            <input type="submit" name="enviar" value="Enviar">
        </form>
        <br>
        <img src="imagens/img5.jpg" alt="irmão do jorel voando"  width="384" height="216">
    </div>
<script>
    function validaForm(){
        var radios = document.getElementsByName("pergunta5");
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