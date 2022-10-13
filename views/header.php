<header>
    <div id="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light ">
                <a class="navbar-brand" href="#">
                    <img src="../assets/images/logo.svg" class="img-fluid" onclick="window.location.href='home.php'">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <!-- verificação de adm -->
                        <?php if ($info['admuser'] == 1) { ?>
                            <li class="nav-item">
                                <a class="nav-link active" href="painel-users.php">Editar usuários</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="painel-adm.php">Editar administradores</a>
                            </li>
                        <?php }; ?>
                    </ul>
            </nav>
        </div>
    </div>
</header>