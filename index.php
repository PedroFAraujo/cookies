<?php
  if (!empty($_POST)) {
    if (isset($_COOKIE['user']) && isset($_COOKIE['password'])) {
        $user = $_POST['email'];
        $password = $_POST['senha'];

        if ($user == $_COOKIE['user'] && $password == $_COOKIE['password']) {
            header("Location: pags/perfil.php");
            exit;
        } else {
  ?>
            <script>
                alert("Credenciais incorretas.");
            </script>
  <?php
        }
    } else {
  ?>
        <script>
            alert("Cookies não estão definidos.");
        </script>
  <?php
    }
  }
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>

  <!--LINK ICONES-->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <link rel="stylesheet" href="assets/css/login.min.css">
</head>

<body id="container__body">

  <main>
    <div class="container">
      <div class="tela__grande">
        <div class="texto">
          <form method="POST">
            <h1>Login</h1>
            <div class="caixa__input">
              <input type="email" name="email" id="email" placeholder="email" required>
              <i class='bx bxs-user'></i>
            </div>
            <div class="caixa__input">
              <input type="password" name="senha" id="senha" placeholder="senha" required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@#*$%^&+=!])(?!.*\s).{8,}$" title="A senha precisa conter pelo menos 8 caractéres, uma letra maiúscula e uma minúscula e um símbolo.">
              <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="lembrar__esquecer">
              <!--<a href="recuperar-senha.php">Esqueceu a Senha?</a>-->
            </div>
            <button type="submit" class="botao__login">Entrar</button>
            <div class="link__registrar">
              <p>Não tem uma conta?<a href="pags/cadastro.php"> Cadastre-se</a></p>
            </div>
          </form>
        </div>
        <div class="img">
          <img src="assets/img/loginImg.png" alt="Homem ao Computador">
        </div>
      </div>
      <div class="mobile">
        <div class="texto">
          <form action="../assets/scripts/verificarRegistro.php" method="POST">
            <h1>Login</h1>
            <div class="caixa__input">
              <input type="email" name="email" id="email" placeholder="email" required>
              <i class='bx bxs-user'></i>
            </div>
            <div class="caixa__input">
              <input type="password" name="senha" id="senha" placeholder="senha" required>
              <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="lembrar__esquecer">
              <!--<label for="lembrarConta"><input type="checkbox" name="lembrarConta" id="lembrarConta">Lembrar Conta</label>
              <a href="recuperar-senha.php">Esqueceu a Senha?</a>-->
            </div>
            <button type="submit" class="botao__login">Entrar</button>
            <div class="link__registrar">
              <p>Não tem uma conta?<a href="cadastro.php">Cadastre-se</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>

</body>

</html