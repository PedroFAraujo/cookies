<?php

    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        $password = $_POST['senha'];

        // Verifica se o cookie 'user' NÃO está definido
        if (!isset($_COOKIE['user'])) {
            setcookie("user", $email, time() + 3600, "/");
            setcookie("password", $password, time() + 3600, "/");
            header("Location: perfil.php");
            exit;
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cadastro</title>

  <link rel="stylesheet" href="../assets/css/cadastro.min.css">
</head>

<body >

  <main class="principal">
    <form method="POST">
      <div class="titulo">
        <h1 class="mainTitle">Cadastrar-se</h1>
      </div>
        <div class="cadastro">
          <div class="caixa__input">
            <input type="email" required name="email" id="email" autocomplete="off" placeholder="Email">
          </div>
          <div class="caixa__input">
            <input type="password" required name="senha" id="senha" autocomplete="off" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@#*$%^&+=!])(?!.*\s).{8,}$" title="A senha precisa conter pelo menos 8 caractéres, uma letra maiúscula e uma minúscula e um símbolo." placeholder="Senha">
          </div>
          <button class="btn__cadastrar">Cadastrar</button>
        </div>
    </form>
  </main>

</body>

</html>