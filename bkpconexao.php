
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
$Address=$_POST['Address'];
$AID=$_POST['AID'];
$AllowBeta=$_POST['AllowBeta'];
$AscPassWord=$_POST['AscPassWord'];
$Birthday=$_POST['Birthday'];
$BlockEnd=$_POST['BlockEnd'];
$BlockEnd_Web=$_POST['BlockEnd_Web'];
$BlockStart=$_POST['BlockStart'];
$BlockStart_Web=$_POST['BlockStart_Web'];
$City=$_POST['City'];
$Email='fred-fdc@gmail.com';
$FirstName=$_POST['FirstName'];
$Gen=$_POST['Gen'];
$Gender=$_POST['Gender'];
$Jumin=$_POST['Jumin'];
$JumLastConnectin=$_POST['LastConnect'];
$LastName=$_POST['LastName'];
$MailIsConfirm=$_POST['MailIsConfirm'];
$MailOpt=$_POST['MailOpt'];
$MD5PassWord=$_POST['MD5PassWord'];
$MiddleName=$_POST['MiddleName'];
$MortherLName=$_POST['MortherLName'];
$Nation=$_POST['Nation'];
$NickName=$_POST['NickName'];
$RegDate=$_POST['RegDate'];
$Right=$_POST['Right'];
$States=$_POST['States'];
$Tel=$_POST['Tel'];
$ZipCode=$_POST['ZipCode'];
$realname=$_POST['realname'];
$USER_CP=$_POST['USER_CP'];
$name=$_POST['name'];
$memberinfo=$_POST['memberinfo'];
$Mod=$_POST['Mod'];
$hint=$_POST['hint'];
$answer=$_POST['answer'];
$job=$_POST['job'];
$BlockReason=$_POST['BlockReason'];
$birthyear=$_POST['birthyear'];
$MotherLName=$_POST['MotherLName'];
$BlockGM=$_POST['BlockGM'];

$insertar= "INSERT INTO dbo.UserInfo(Account,Address,AID,AllowBeta,AscPassWord,Birthday,BlockEnd,BlockEnd_Web,BlockStart,BlockStart_Web,City,Email,FirstName,Gen,Gender,Jumin,LastConnect,LastName,MailIsConfirm,MailOpt,
MD5PassWord,MiddleName,MortherLName,Nation,NickName,RegDate,[Right],States,Tel,ZipCode,realname,USER_CP,name,memberinfo,Mod,hint,answer,job,BlockReason,birthyear,MotherLName,BlockGM)VALUES('$Account','$Address','$AID','$AllowBeta','$AscPassWord','$Birthday','$BlockEnd','$BlockEnd_Web','$BlockStart','$BlockStart_Web','$City','$Email','$FirstName','$Gen','$Gender','$Jumin','$JumLastConnectin','$LastName','$MailIsConfirm','$MailOpt','$MD5PassWord','$MiddleName','$MortherLName','$Nation','$NickName','$RegDate','$Right','$States','$Tel','$ZipCode','$realname','$USER_CP','$name','$memberinfo','$Mod','$hint','$answer','$job','$BlockReason','$birthyear','$MotherLName','$BlockGM')";

$recurso=sqlsrv_prepare($conn,$insertar);

if(sqlsrv_execute($recurso)){
    echo"Criado com sucesso";

}
else{
        echo"Falha na criação";

}

}
?>
