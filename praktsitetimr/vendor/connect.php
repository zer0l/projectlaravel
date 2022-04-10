<?php

$connect = mysqli_connect('localhost', 'root', '', 'prakt');

if (!$connect) {
    die('Error connect to DataBase');
}
