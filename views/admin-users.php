<?php
require('../php/config.php');
require('../php/getusers.php');

if ($info['admuser'] == 0) {
  header('location: home.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="../assets/css/main.css" />

  <script src="https://kit.fontawesome.com/9884a810af.js" crossorigin="anonymous"></script>

  <title>Marketing Website</title>
</head>

<body>
  <div class="container">
    <table class="table table-striped table-dark">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Nome</th>
          <th scope="col">User</th>
          <th scope="col">Email</th>
          <th scope="col">Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($infoall as $info) : ?>
          <tr>
            <td><?php echo $info['id']; ?></td>
            <td><?php echo $info['nome']; ?></td>
            <td><?php echo $info['user']; ?></td>
            <td><?php echo $info['email']; ?></td>
            <td>
              <a href="admin-editar-user.php?id=<?= $info['id']; ?>">Editar</a>
              <a href="../php/admin-deleteuser.php?id=<?= $info['id']; ?>" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
              <!-- Botões para editar e excluir o registro na tabela -->
            </td>
          </tr>
      </tbody>
    <?php endforeach; ?>
    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/magnify/jquery.magnific-popup.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  <script src="https://kit.fontawesome.com/9884a810af.js" crossorigin="anonymous"></script>
</body>

</html>