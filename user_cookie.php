<?php


if (isset($_POST["pseudo"])){
    setcookie('user_cookie', $_POST["pseudo"]);
    $nickname = $_POST["pseudo"];
}
