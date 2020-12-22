<?php
include_once '../controller/questionarioController.php';
$visualizaQuestionario = false;
if (array_key_exists("nomeQuestionario", $_POST)) {
    $controller = new QuestionarioController();
    $questionario = $controller->criaQuestionario($_POST["nomeQuestionario"], $_POST["descricaoQuestionario"]);

    $visualizaQuestionario = true;
    header('Location: ./criarPerguntas.php?id=' . $questionario->getId());
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Criando questionario</title>
    <style>
        body {
            background-image: url("fundosite.jpg")
        }
    </style>
</head>

<body>
    <h3 class="tituloQuest">Novo questionário</h3>
    <hr>
    <form class="formulario-validacao" id="formContentOn" method="POST" action="criarQuestionario.php">
        <div class="container">
            <label for="exampleFormControlInput1" class="form-label">Nome do questionário</label>
            <input type="text" name="nomeQuestionario" class="form-control" id="exampleFormControlInput1" placeholder="Ex; prova de inglês..">
            <label for="exampleFormControlTextarea1" class="form-label">Descrição do questionário</label>
            <textarea name="descricaoQuestionario" class="form-control" id="exampleFormControlTextarea1" placeholder="Ex; Prova de inglês dos alunos do terceiro ano.." rows="3"></textarea>
            <hr>
            <button type="submit" id="enviarQuestionario" class="btn btn-success">Adicionar perguntas</button>
        </div>       
    </form>

    <div class="fixed-bottom">
        <button class="btn btn-primary" type="submit" id="botao">Menu principal</button>
    </div>
    <script>
        var clicarBotaoMenu = window.document.getElementById("botao")
        var enviarPergunta = window.document.getElementById("enviarPergunta")

        clicarBotaoMenu.addEventListener('click', clicar)
        enviarPergunta.addEventListener('click', addPergunta)

        function clicar() {
            window.location.href = "/desafioquestionario/"
        }

        function addPergunta() {
            window.alert("Pergunta adicionada ao questionário com sucesso!")
        }
    </script>
</body>
</html>