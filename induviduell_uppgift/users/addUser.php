<?php

    include("../object/users.php");

    $user_handler = new User($databaseHandler);

    echo $user_handler->addUser($_POST['username'], $_POST['password'], $_POST['email']);

    header("location:../index.php");


?>