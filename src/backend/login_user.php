<?php
include "connection.php";

$email = mysqli_real_escape_string($connection, $_POST["email_user"]);
$password = md5($_POST["password_user"]);

$sql = "SELECT * FROM users WHERE email_user = '$email' AND password_user = '$password'";
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "Login Realizado Com Sucesso!";
} else {
    echo "Login Não Foi Realizado";
}

mysqli_close($connection);