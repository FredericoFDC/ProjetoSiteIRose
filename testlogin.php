<?php

    if(isset($_POST['submit'])){

        include_once('conexao.php');
        $Email = $_POST['email'];
        $MD5Password = $_POST['senha'];

        $sql = "SELECT * FROM dbo.UserInfo WHERE email = '$Email' and senha = '$MD5Password'";

        $result = $recurso->query($sql);

        print_r($result);

    }

    else{

        echo "Não foi possivel realizar a conexão";
    }



?>