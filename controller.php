<?php

    //echo 'Bem vindo';
    require_once 'model.php';

    //instancia
    $model= new model();

    $model->Account=$_POST['login'];
    $model->MD5PassWord=$_POST['senha'];

    $filaController=$model->logear();

    if($filaController>0) {

        echo "<h1>Bem vindo Usuario. </h1";

    }else{

        echo "<h1> Usuario sua senha está incorreta. </h1>";

        //header("refresh:2; url=http://localhost/irose/index.html ");
    }


?>