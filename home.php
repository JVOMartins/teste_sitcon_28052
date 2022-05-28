<?php require "conecta.php"; ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Home</title>
</head>

<body>
    <div class="container-fluid text-center">
        <h1>Módulo de cotação de Procedimentos</h1>
    </div>
    <form action="">
        <br>
        <div class="container-sm text-center align-middle">
            <div class="row row-cols-3">
                <div class="col">
                    <button class="btn btn-primary" formaction="cad_proc.php">Cadastrar Procedimentos</button>
                </div>
                <div class="col">
                    <button formaction="cad_cotacao.php" class="btn btn-primary">Cadastrar Cotação</button>
                </div>
                <div class="col">
                    <button formaction="validar_cotacao.php" class="btn btn-primary">Validar Cotação</button>
                </div>
            </div>
        </div>
    </form>
</body>

</html>