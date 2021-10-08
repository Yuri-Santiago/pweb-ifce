<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Respostas</title>
</head>
<body>
    <?php
        setcookie("pergunta5", $_POST["pergunta5"]);
        $acertos = 0;

        if($_COOKIE["pergunta1"] == "Ninguém sabe"){
            $acertos++;
            $resultado1 = "Acertou";
        } else {
            $resultado1 = "Errou";
        }
        if($_COOKIE["pergunta2"] == "Juju e Gigi"){
            $acertos++;
            $resultado2 = "Acertou";
        } else {
            $resultado2 = "Errou";
        }
        if($_COOKIE["pergunta3"] == "Lara"){
            $acertos++;
            $resultado3 = "Acertou";
        } else {
            $resultado3 = "Errou";
        }
        if($_COOKIE["pergunta4"] == "Steve Magal"){
            $acertos++;
            $resultado4 = "Acertou";
        } else {
            $resultado4 = "Errou";
        }
        if($_COOKIE["pergunta5"] == "Abacate"){
            $acertos++;
            $resultado5 = "Acertou";
        } else {
            $resultado5 = "Errou";
        }


        if($acertos == 0){
            $finalizacao = "<h1>Não foi dessa vez... Você não acertou nada.</h1>";
        } elseif($acertos == 1){
            $finalizacao = "<h1>Tente novamente. Você acertou apenas uma pergunta</h1>";
        } elseif($acertos == 2){
            $finalizacao = "<h1>Quase lá. Você acertou duas perguntas</h1>";
        } elseif($acertos == 3){
            $finalizacao = "<h1>Por pouco. Você acertou três perguntas</h1>";
        } elseif($acertos == 4){
            $finalizacao = "<h1>Muito bem! Você acertou quatro perguntas</h1>";
        } else {
            $finalizacao = "<h1>Parabéns!! Você acertou todas as perguntas</h1>";
        }

        $nota = "<h2>Nota Final: ".$acertos."/5</h2>";
    ?>
    <div id="navegacao">
        <h1>Obrigado por Participar! <br>Jogue Novamente se Quiser</h1>
        <ul>
            <li id="selecionado"><a href="index.html">Quiz - Cookies</a></li>
            <li><a href="sessions-index.html">Quiz - Sessions</a></li>
        </ul>
    </div>
    <div id="conteudo">
        <?php echo $finalizacao;?>
        <table>
            <tr>
                <th>Pergunta</th>
                <th>Resposta Correta</th>
                <th>Sua resposta</th>
                <th>Resultado</th>
            </tr>
            <tr>
                <td>Qual o verdadeiro nome do Irmão do Jorel?</td>
                <td>Ninguém sabe</td>
                <td><?php echo $_COOKIE["pergunta1"];?></td>
                <td><?php echo $resultado1;?></td>
            </tr>
            <tr>
                <td>Qual o nome das duas avós do Irmão do Jorel?</td>
                <td>Juju e Gigi</td>
                <td><?php echo $_COOKIE["pergunta2"];?></td>
                <td><?php echo $resultado2;?></td>
            </tr>
            <tr>
                <td>Quem é o (a) melhor amigo (a) do Irmão do Jorel?</td>
                <td>Lara</td>
                <td><?php echo $_COOKIE["pergunta3"];?></td>
                <td><?php echo $resultado3;?></td>
            </tr>
            <tr>
                <td>Quem é o ídolo do Irmão do Jorel?</td>
                <td>Steve Magal</td>
                <td><?php echo $_COOKIE["pergunta4"];?></td>
                <td><?php echo $resultado4;?></td>
            </tr>
            <tr>
                <td>Qual a fruta favorita da avó do Irmão do Jorel?</td>
                <td>Abacate</td>
                <td><?php echo $_COOKIE["pergunta5"];?></td>
                <td><?php echo $resultado5;?></td>
            </tr>
        </table>
        <br>
        <?php echo $nota;?>
        <br>
        <img src="imagens/img6.jpg" alt="irmão do jorel e família"  width="384" height="216">
    </div>
</body>
</html>