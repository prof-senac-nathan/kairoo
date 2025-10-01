<?php
$connection = mysqli_connect("localhost", "u136736371_root", "Kairoo1234", "u136736371_kairoo");

if (!$connection) {
    echo "Erro" . mysqli_connect_error();
}