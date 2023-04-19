<?php

require_once("config.php");

session_start();

if($polaczenie->connect_errno!=0)
{
    echo "Error:".$polaczenie->connect_errno . "Opis:" . $polaczenie->connect_errno;
}
else
{
    $login = $_POST['login'];
    $haslo = $_POST['haslo'];

    echo "Wiktor Jasek";

    $polaczenie->close();
}
header('location: index.php');