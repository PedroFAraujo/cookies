<?php
    unset($_COOKIE['user']);
    unset($_COOKIE['password']);

    setcookie("user", "", time() - 3600, "/");
    setcookie("password", "", time() - 3600, "/");

    if (empty($_COOKIE['user']) && empty($_COOKIE['password'])) {
        header("Location: ../../index.php");
        exit;
    } else {
        echo "Ocorreu um erro ao excluir cookies";
        header("Location: ../../pags/perfil.php");
    }
?>
