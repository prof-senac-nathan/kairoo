<?php
$connection = mysqli_connect("kairoo.shop", "u136736371_user_kairoo", "Kairoo1234 ", "u136736371_kairoo");

if (!$connection) {
    echo "Erro" . mysqli_connect_error();
}