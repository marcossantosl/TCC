<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="css/main.css" />

    <title>Marketing Website</title>
</head>

<body>



    <!-- CADASTRO -->
    <div class="container containerAcesso">
        <div class="row mb-4  justify-content-center align-self-center">
            <div class="col-lg-6 col-md-6 align-self-center mb-md-0 mb-4">
                <h2 class="mb-3"> Bem vindo de volta </h2>
                <p class="mb-4"> Conecte sua conta agora</p>
                <button type="button" class="btn btn-primary href=" cadastro.php">entrar</button>
            </div>

            <div class="col-lg-6 col-md-6 align-self-center mb-md-0 mb-4">
                <h2 class="mb-4 justify-content-center"> Crie sua conta </h2>
                <form>
                    <div class="mb-4">
                        <label class="form-label"></label>
                        <input type="text" class="form-control" placeholder="nome completo" id="#">
                    </div>
                    <div class="mb-4">
                        <label class="form-label"></label>
                        <input type="text" class="form-control" placeholder="usuário" id="#">
                    </div>
                    <div class="mb-4">
                        <label class="form-label"></label>
                        <input type="email" placeholder="email" class="form-control" id="#">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"></label>
                        <input type="password" placeholder="senha" class="form-control" id="#">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"></label>
                        <input type="password" placeholder="repita a senha" class="form-control" id="#">
                    </div>
                </form>
                <button type="submit" class="btn btn-primary">cadastrar</button>
            </div>
        </div>
        <!-- //CADASTRO -->

    </div>

</body>

</html>