<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IRose Olympus</title>
</head>
    <style>
        body{
            overflow-x: hidden;
            background-color: rgba(0, 0, 0, 0.4);
        }
    
        .logo {
        padding: 15px;
        }
        .header-2 {
        background-color: rgba(0, 0, 0, 0.3);
        width: 100%;
        height: 85px;
        margin-top: 47px;
        }

        .menu-urls {
        height: 10px;
        border-bottom: 3px solid #b27e74;
        }

        .menu ul li {
        display: inline-block;
        color: #b27e74;
        margin-left: 30px;
        padding: 50px;
        }

        .menu ul li a:hover {
        color: #1a0f0c;
        }

        .menu ul li :hover {
        border-bottom: 3px solid #1a0f0c;
        }

        .menu ul li a {
        color: #b27e74;
        text-decoration: none;
        font-size: 20px;
        }

        .menu {
        width: 100%;
        float: inherit;
        }
        .col-100 {
        width: 100%;
        height: 1px;
        float: left;
        position: absolute;
        margin-top: -20px;
        margin-left: -7px;
        }
    </style>
<body>

    <header class="menu-principal">
        <main>
            <div class="header-1">
                <div class="logo">
                    <img src="./img/logo.png" alt="">
                </div>
            </div>
        </main>
    </header>
    <main class="col-100 menu-urls">
        <div class="header-2">
            <div class="menu">
                <ul style="margin-top: -17px;position: absolute;border-top-width: 0px;border-top-style: solid;margin-left: 140px;position: absolute;">
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="GUIDES.html">GUIDES</a></li>
                    <li><a href="features.html">FEATURES</a></li>
                    <li><a href="itemmall.html">ITEM MALL</a></li>
                    <li><a href="community.html">COMMUNITY</a></li>
                    <li><a href="download.html">DOWNLOAD</a></li>
                </ul>
            </div>
        </div>
    </main>
</body>
</html>
<?php
if(!empty($_POST)){
$serverName = "DESKTOP-VG9IMGD\SQLEXPRESS"; //serverName\instanceName

// Puesto que no se han especificado UID ni PWD en el array  $connectionInfo,
// La conexión se intentará utilizando la autenticación Windows.
$connectionInfo = array( "Database"=>"seven_ORA");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
#$Nom=$_POST['nombre'];
#$Ape=$_POST['apellidos'];
#$Dir=$_POST['direction'];
#$Cor=$_POST['correcao'];
#$Tel=$_POST['telefone'];
#$Usu=$_POST['usuario'];
#$Cla=$_POST['clave'];
#$insertar="INSERT into Usuario(Nombre,Apellido,Direccion,telefono,Correo,Usuario,Clave)values('$Nom','$Ape','$Dir','$Tel','$Cor','$Usu','$Cla')";

$Account=$_POST['Account'];
$Address='null';
$AID='0';
$AllowBeta='0';
$AscPassWord='null';
$Birthday='10/03/1996';
$BlockEnd='10/03/1996';
$BlockEnd_Web='10/03/1996';
$BlockStart='10/03/1996';
$BlockStart_Web='10/03/1996';
$City='null';
$Email=$_POST['Email'];
$FirstName='null';
$Gen='null';
$Gender='null';
$Jumin='null';
$LastConnectin='null';
$LastName='null';
$MailIsConfirm='True';
$MailOpt='True';
$MD5PassWord=$_POST['MD5PassWord'];
$encpass = md5($MD5PassWord);
$MiddleName='null';
$MortherLName='null';
$Nation='null';
$NickName='null';
$RegDate='10/03/1996';
$Right='2';
$States='null';
$Tel='null';
$ZipCode='null';
$realname='null';
$USER_CP='null';
$name='null';
$memberinfo='0';
$Mod='null';
$hint='null';
$answer='null';
$job='null';
$BlockReason='null';
$birthyear='10/03/1996';
$MotherLName=$_POST['MotherLName'];
$BlockGM='null';

$insertar= "INSERT INTO dbo.UserInfo(Account,Address,AID,AllowBeta,AscPassWord,Birthday,BlockEnd,BlockEnd_Web,BlockStart,BlockStart_Web,City,Email,FirstName,Gen,Gender,Jumin,LastConnect,LastName,MailIsConfirm,MailOpt,
MD5PassWord,MiddleName,MortherLName,Nation,NickName,RegDate,[Right],States,Tel,ZipCode,realname,USER_CP,name,memberinfo,Mod,hint,answer,job,BlockReason,birthyear,MotherLName,BlockGM)VALUES('$Account','$Address','$AID','$AllowBeta','$AscPassWord','$Birthday','$BlockEnd','$BlockEnd_Web','$BlockStart','$BlockStart_Web','$City','$Email','$FirstName','$Gen','$Gender','$Jumin','$LastConnectin','$LastName','$MailIsConfirm','$MailOpt','$encpass','$MiddleName','$MortherLName','$Nation','$NickName','$RegDate','$Right','$States','$Tel','$ZipCode','$realname','$USER_CP','$name','$memberinfo','$Mod','$hint','$answer','$job','$BlockReason','$birthyear','$MotherLName','$BlockGM')";

$recurso=sqlsrv_prepare($conn,$insertar);

if(sqlsrv_execute($recurso)){
    echo"Sua conta foi criada com sucesso";

}
else{
        echo"Falha na criação da sua conta essa conta já existe";

}

}
?>
