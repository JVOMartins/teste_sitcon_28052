<?php require "conecta.php"; ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="js/cad_proc.js"></script>
    <title>Cadastro Procedimentos</title>
</head>

<body>
    <div class="container-fluid text-center">
        <h1>Cadastrar Procedimentos</h1>
    </div>
    <form action="" method="POST">
        <br>
        <div class="container-sm text-center align-middle">
            <div class="row row-cols-2 flex-nowrap">
                <div class="col input-group" style="width:50% ;">
                    <span class="input-group-text">Nome do Procedimento:</span><input required id="proc" name="proc" class="form-control" aria-label="Procedimentos" type="text">
                </div>
                <div class="col">
                    <button type="button" id="submit_proc" class="btn btn-primary">Cadastrar Procedimento</button>
                </div>
            </div>
        </div>
        <div class="container-sm text-center align-middle">
                <h3 id="msg"></h3>
            </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-bottom">
            <div class="container-sm text-center align-middle">
                <button class="btn btn-primary" formaction="home.php" formnovalidate type="submit">Voltar</button>
            </div>
        </nav>
    </form>
    <table class="table" id="tableproc">
        <tr>
            <th>
                Código
            </th>
            <th>
                Nome Procedimento
            </th>
        </tr>
    </table>
</body>


</html>