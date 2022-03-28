//--Isso seria usado, quando o site estivesse em um servidor--//

<?php

if(isset $_POST["Email"]) && !empty($_POST["Email"])

$Nome = addcslashes($_POST["Nome"]);
$CNPJ =  addcslashes($_POST["CNPJ"]);
$Empresa =  addcslashes($_POST["Empresa"]);
$Telefone =  addcslashes($_POST["Telefone"]);
$Email =  addcslashes($_POST["Email"]);
$Pedido =  addcslashes($_POST["Pedido"]);

$to = "gabriel.ayres.vendramini@gmail.com";
$subject = "Pedido - The Greens";
$body = "Nome: ".$Nome ."/n".
        "CNPJ: ".$CNPJ ."/n".
        "Empresa: ".$Empresa ."/n".
        "Telefone: ".$Telefone ."/n".
        "Email: ".$Email ."/n".
        "Pedido: ".$Pedido;
$Header ="From: Thegreens.com"."/r/n"
                ."Reply-To:".$Email ."/r/r"
                ."X=mailer:PHP/".phpversion();

if (mail($to,$subject,$body,$Header)){

    echo("Email Enviado Com Sucesso");

} else {
    echo("Falha não foi possivel enviar o Email, tente de novo");
}




?>
