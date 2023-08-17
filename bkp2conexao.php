
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
    echo"Criado com sucesso";

}
else{
        echo"Falha na criação";

}

}
?>
