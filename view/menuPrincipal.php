<?php
include_once '../controller/questionarioController.php';
$controller = new QuestionarioController();
$questionarios = $controller->listaQuestionarios();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GERENCIADO DE QUESTÕES</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <style>
        body {
            background-image: url("fundosite.jpg");
        }
    </style>

</head>

<body>

    <div class="container">
        <div class="column">
            <div class="col-sm">
                <br>
                <hr>
                <h1>GERENCIADOR DE QUESTÕES</h1>
                <p>Crie e salve seus questionários, edite questionários salvos e delete quando quiser. </p>
                <a href="../view/criarQuestionario.php">
                    <button type="button" class="btn btn-success">Adicionar um novo questionário</button>
                </a>
                <hr>
                <?php if ($questionarios == false) : ?>

                    <h4>Não existem questionários salvos</h4>

                <?php else : ?>

                    <?php foreach ($questionarios as $questionario) : ?>
                        <div class="card">
                            <h2 class="card-header">
                                <a href="./visualizaQuestionario.php?id=<?php echo $questionario["id"] ?>">
                                    <?php echo "Nome: " . $questionario["nome"] ?>
                                </a>
                            </h2>
                            <div class="card-body">
                                <p>Descrição: <?php echo $questionario["descricao"] ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>

                <?php endif; ?>
            </div>
        </div>
    </div>
</body>

</html>