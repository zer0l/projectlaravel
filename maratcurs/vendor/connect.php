<?php 

session_start();

$connect = mysqli_connect('localhost','root','','maratcurs');

if(!$connect){
    echo"нет";
}