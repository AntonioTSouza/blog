<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lib/bootstrap-4.2.1-dist/css/bootstrap.min.css">
    <title>Login | Projeto para Web com PHP</title>
</head>
<body>
    <div class="conatiner">
        <div class="row">
            <div class="col-md-12">
                <?php include 'includes/topo.php'; ?>
            </div>
        </div>
        <div class="row" style="min-height: 500px;">
            <div class="col-md-12">
                <?php include 'includes/menu.php'; ?>
            </div>
            <div class="col-md-10" style="padding-top: 50px;">
                <div class="card-header">Login</div>
                <div class="card-body">
                    <form action="core/usuario_repositorio.php" method="post">
                        <input type="hidden" name="acao" value="login">
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="text" name="email" id="email" class="form-control" require="required">
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha</label>
                            <input type="password" name="senha" id="senha" class="form-control" require="required">
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-success">Acessar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php include 'includes/rodape.php'; ?>
            </div>
        </div>
    </div>
    <script src="lib/bootstrap-4.2.1-dist/js/bootstrap.min.js"></script>
</body>
</html>