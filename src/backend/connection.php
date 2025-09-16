<?php
$connection = mysqli_connect("localhost", "root", "1234", "teste");

if (!$connection) {
    echo "Erro" . mysqli_connect_error();
}