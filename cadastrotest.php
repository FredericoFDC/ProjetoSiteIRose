<?php

    if(isset($_POST['submit']))
    {
       // print_r('Nome: ' . $_POST['nome']);
       // print_r('<br>');
       // print_r('Email: ' . $_POST['email']);
       // print_r('<br>');
       // print_r('Telefone: ' . $_POST['telefone']);
       // print_r('<br>');
       // print_r('Sexo: ' . $_POST['genero']);
       // print_r('<br>');
       // print_r('Data de nascimento: ' . $_POST['data_nascimento']);
       // print_r('<br>');
       // print_r('Cidade: ' . $_POST['cidade']);
       // print_r('<br>');
       // print_r('Estado: ' . $_POST['estado']);
       // print_r('<br>');
       // print_r('Endereço: ' . $_POST['endereco']);

       include_once('config.php');

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
       $Email=$_POST['Email'];
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
       $Right=$_POST['[Right]'];
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

       $result=mysqli_query($conexao, "INSERT into UserInfo(Account,Address,AID,AllowBeta,AscPassWord,Birthday,BlockEnd,BlockEnd_Web,BlockStart,BlockStart_Web,City,Email,FirstName,Gen,Gender,Jumin,LastConnect,LastName,MailIsConfirm,MailOpt,
       MD5PassWord,MiddleName,MortherLName,Nation,NickName,RegDate,[Right],States,Tel,ZipCode,realname,USER_CP,name,memberinfo,Mod,hint,answer,job,BlockReason,birthyear,MotherLName,BlockGM)values('$Account','$Address','$AID',
       '$AllowBeta','$AscPassWord','$Birthday','$BlockEnd','$BlockEnd_Web','$BlockStart','$BlockStart_Web','$City','$Email','$FirstName','$Gen','$Gender','$Jumin','$JumLastConnectin','$LastName','$MailIsConfirm',
       '$MailOpt','$MD5PassWord','$MiddleName','$MortherLName','$Nation','$NickName','$RegDate','$Right','$States','$Tel','$ZipCode','$realname','$USER_CP','$name','$memberinfo','$Mod','$hint','$answer','$job',
       '$BlockReason','$birthyear','$MotherLName','$BlockGM')");
    }
    

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro IRose Olympus</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(176, 202, 218), rgb(179, 77, 19));
        }

        .box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.9);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
            color: white;
        }

        fieldset {
            border: 3px solid rgb(241, 83, 9);
        }

        legend {
            border: 1px solid rgb(241, 83, 9);
            padding: 10px;
            text-align: center;
            background-color: rgb(241, 83, 9);
            border-radius: 8%;
        }

        .inputBox {
            position: relative;
        }

        .inputUser {
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }

        .labelInput {
            position: absolute;
            pointer-events: none;
            transition: .5%;
        }

        .inputUser:focus~.labelInput {
            top: 250px;
            font-size: 12px;
            color: bisque;
            right: 50px;
        }

        #data_nascimento {
            border: none;
            padding: 8px;
            border-radius: 10pc;
            outline: none;
            font-size: 15px;
        }

        #submit {
            background-image: linear-gradient(to right, rgb(176, 202, 218), rgb(179, 77, 19));
            width: 1005;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 15px;
        }

        #submit:hover {
            background-image: linear-gradient(to right, rgb(156, 194, 218), rgb(177, 73, 14));
        }
    </style>
</head>

<body>
    <div class="box">
        <form action="cadastrotest.php" method="POST">
            <fieldset>
                <legend><b>Cadastro</b></legend>
                <br>
                <div class="inputbox">
                    <input type="text" name="Account" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="email" name="Email" id="email" class="inputUser" required>
                    <label for="nome" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="tel" name="Tel" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">telefone</label>
                </div>
                <br><br>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outros" name="genero" value="outros" required>
                <label for="outros">Outros</label>
                <br><br>
                <div class="inputbox">
                    <label for="data_nascimento"><b>Data De Nascimento</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>

</html>