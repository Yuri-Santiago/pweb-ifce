<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Pergunta 3</title>
</head>
<body>
    <?php
        session_start();
        $_SESSION["pergunta2"] = $_POST["pergunta2"];
    ?>
    <div id="conteudo">
        <h2>Pergunta 3</h2>
        <h3>Quem é o (a) melhor amigo (a) do Irmão do Jorel?</h3>
        <form action="sessions-pergunta4.php" method="post" onsubmit="return validaForm()">
            <input type="radio" name="pergunta3" value="Lara">Lara<br>
            <input type="radio" name="pergunta3" value="Ana Catarina">Ana Catarina<br>
            <input type="radio" name="pergunta3" value="Beto Caixinhos">Beto Caixinhos<br>
            <input type="radio" name="pergunta3" value="Billy Doidão">Billy Doidão<br>
            <br>
            <input type="submit" name="enviar" value="Enviar">
        </form>
        <br>
        <img src="imagens/img3.jpg" alt="irmão do jorel com Lara"  width="384" height="216">
    </div>
<script>
    function validaForm(){
        var radios = document.getElementsByName("pergunta3");
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