<?php

function connectDatabase(){
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'ban';

    $connection = mysqli_connect($server, $user, $password, $database);

    if(!$connection){
        die('Conexão falhou:' . mysqli_connect_error());
    }

    return $connection;
}
