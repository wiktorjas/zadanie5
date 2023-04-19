<?php

    $polaczenie = @new mysqli("localhost", "root", "", "panel");
    $sql_user = "SELECT * FROM users Where username='".$_POST['login']."'"."AND password='".hash('sha256', $_POST['password'])."'";

    ?>