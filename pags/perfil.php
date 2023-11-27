

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Perfil</title>

	<!-- icones -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

	<link rel="stylesheet" href="../assets/css/perfil.css">
	<link rel="stylesheet" href="../assets/css/trocarFoto.min.css">

</head>

<body id="container__body">
	<main>


		<!--DESKTOP-->
		<div class="perfil__container">
			<div class="perfil__main">
				<div class="espaco__branco">
                    <div class="upload">
                        <img src="../assets/img/default-img-profile.svg" id="image" id="image">
                    </div>
				</div>
				<div class="perfil__info">
					<div class="caixa__info">
						<i class='bx bx-user icone'></i>
						<div class="perfil__texto">
							<p><?= $_COOKIE['user'] ?></p>
						</div>
						<i class='bx bxs-user span'></i>
					</div>
					<div class="caixa__info">
                        <i class='bx bx-lock-alt icone'></i>
						<div class="perfil__texto">
							<p id="perfil__texto__email"><?= $_COOKIE['password'] ?></p>
						</div>
						<i class='bx bx-lock-alt span'></i>
					</div>
				</div>

				<div class="botao">
					<a class="btn__perfil" href="./editar.php">Editar</a>
				</div>
                <div class="botao">
					<a class="btn__perfil" href="../index.php">Sair</a>
				</div>
				<div class="botao">
					<a class="btn__perfil" href="../assets/scripts/excluir.php">Excluir</a>
				</div>
			</div>
		</div>
	</main>

</body>

</html>