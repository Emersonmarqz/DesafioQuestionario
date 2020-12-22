<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Adicionar perguntas ao questionário</title>
    <style>
        body {
            background-image: url("fundosite.jpg")
        }
    </style>
</head>

<body>
    <h3 class="tituloQuest">Adicionar perguntas</h3>
    <hr>
    <form class="formulario-validacao" id="formContentOn" method="POST" action="menuPrincipal">
        <div class="container">
            Adicione uma pergunta
            <input type="text" name="pergunta" class="form-control" id="exampleFormControlInput1" placeholder="Digite sua pergunta"> <br>
            Selecione a alternativa correta <br>
            <input type="radio" name="alternativa-1" value="clicado"> <input type="text" name="alternativa-1-" placeholder="Alternativa 1" size="70"> <br>
            <input type="radio" name="alternativa-2" value="clicado"> <input type="text" name="alternativa-2-" placeholder="Alternativa 2" size="70"> <br>
            <input type="radio" name="alternativa-3" value="clicado"> <input type="text" name="alternativa-3-" placeholder="Alternativa 3" size="70"> <br>
            <input type="radio" name="alternativa-4" value="clicado"> <input type="text" name="alternativa-4-" placeholder="Alternativa 4" size="70"> <br>
            <input type="radio" name="alternativa-5" value="clicado"> <input type="text" name="alternativa-5-" placeholder="Alternativa 5" size="70"> <br>
            <hr>
            <a href="../view/criarPerguntas.php">
                <button type="button" class="btn btn-success">Adicionar outra pergunta </button>
            </a>
            <button type="submit" id="finalizarQuestionario" class="btn btn-success">Finalizar questionário</button>
        </div>
    </form>




    <div class="fixed-bottom">
        <button class="btn btn-primary" type="button" id="botao">Menu principal</button>
    </div>
    <script>
        var clicarBotaoMenu = window.document.getElementById("botao")
        var finalizarQuestionario = window.document.getElementById("finalizarQuestionario")
        clicarBotaoMenu.addEventListener('click', clicar)
        finalizarQuestionario.addEventListener('click', finalizarQuest)

        function clicar() {
            window.location.href = "/desafioquestionario/"
        }

        function finalizarQuest() {
            window.alert("O seu questionário foi salvo!")
        }
    </script>
</body>

</html>