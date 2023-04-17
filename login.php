<?php
    session_start();

    if($_POST['login']=="admin" && $_POST['password']=="test")
    {
        unset($_SESSION['logFail']);
        $_SESSION['logged'] = TRUE;
        header('Location: site.php');
    }
    else
    {
        $_SESSION['logFail'] = TRUE;
        header('Location: index.php');
    }
?>