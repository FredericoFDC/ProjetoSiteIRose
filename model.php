<?php
    //model

    class model
    {
        var $id;
        var $Account;
        var $MD5PassWord;

        function __construct(){

        }

        function Logear(){

            //variavel de conexao
            $cadenaCnx="sqlsrv:Server=DESKTOP-VG9IMGD\SQLEXPRESS;Database=seven_ORA";
            $User="sa";
            $Password="aimare306090";

            $cnx= new PDO($cadenaCnx,$User,$Password);

            try{
                $consulta=$cnx->prepare("SELECT*FROM dbo.UserInfo WHERE Email=:parametro1 AND MD5PassWord=(SELECT dbo.UserInfo(:parametro2))");

                $consulta->bindValue(":parametro1",$this->Account);
                $consulta->bindValue(":parametro2",$this->MD5PassWord);
                
                $consulta->execute();

                $filaModel=$consulta->fetch();
                
                return $filaModel;

            }
            catch(PDOException $e){

                echo "Erro de conexao".$e;

            }
        
        }
    }

?>