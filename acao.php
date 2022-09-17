<?php
$nome = isset($_GET['nomesobrenome'])?$_GET['nomesobrenome']:'';
$email = isset($_GET['email'])?$_GET['email']:'';
$redeSocial = isset($_GET['redesocial'])?$_GET['redesocial']:'';
$telefone = isset($_GET['telefone'])?$_GET['telefone']:'';
$nascimento = isset($_GET['data'])?$_GET['data']:'';

$sit = true;

if (strlen($nome)<3) {
    echo ("<font color='#FF0000'>Vá digitar o nome corretamente, seu vadio</font>");
    $sit = false;
}else {
    echo ("Bem vindo, ".$nome);

}

if (strpos($email,"@")) {
    echo ("<br>Email: ".$email);
}else {
    $sit = false;
    echo ("<br><font color='#FF0000'>Vá digitar o email corretamente.</font>");
}
if (strlen($redeSocial)<3) {
    $sit = false;
    echo ("<br><font color='#FF0000'>Vá digitar a rede social corretamente.</font>");
}else {
    echo ("<br>Rede social: ".$redeSocial);
}
if (strlen($telefone)<7) {
    $sit = false;
    echo ("<br><font color='#FF0000'>Volte e digite o telefone corretamente.</font>");
}else{
    echo("<br>Telefone: ".$telefone);
}


if ($nascimento==''){
    $sit=false;
    echo("<br><font color='#FF0000'>Volte e preencha o campo data de nascimento. </font>");   
}
else{
    echo ("<br>Data de nascimento: ".$nascimento);
}


    
if ($sit==true){
    echo ("<br>Bem-vindo, ".$nome);
    echo("<br> Seus dados: ");
    var_dump($_GET);

    $dados = array('nome e sobrenome'=>$nome, 'email'=>$email, 'rede social'=>$redeSocial,'telefone'=>$telefone, 'data de nascimento'=>$nascimento);
    file_put_contents("contato.html", json_encode($dados), FILE_APPEND);
    $array2 = json_decode(file_get_contents('contato.html'), true);


}
?> 