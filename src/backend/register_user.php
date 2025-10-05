<?php
include "connection.php";

$name = mysqli_real_escape_string($connection, $_POST["name_user"]);
$email = mysqli_real_escape_string($connection, $_POST["email_user"]);
$password = md5($_POST["password_user"]);

$sqlFindEmail = "SELECT * FROM users WHERE email_user = '$email'";
$resultFindEmail = mysqli_query($connection, $sqlFindEmail);

if (mysqli_num_rows($resultFindEmail) > 0) {
    echo "E-mail cadastrado";
    return;
}

if (str_contains($email, '@edu')) {
    echo "Email Institucional Válido";
} elseif (str_contains($email, '@prof')) {
    echo "Email Institucional Válido";
} else {
    echo "Email Institucional Inválido";
    return;
}

$sql = "INSERT INTO users (name_user, email_user, password_user) VALUES ('$name', '$email', '$password')";
$result = mysqli_query($connection, $sql);

if ($result) {
    sleep(1);
    header("Location: ../pages/registration-success.php");
    exit();
}

mysqli_close($connection);
