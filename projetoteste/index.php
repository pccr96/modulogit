<?php
/*

$nome = "Pedro";
$sobrenome = "César";

$carros = array(
    "ford" => "focus",
    "renault" => "sandero",
    "fiat" => "uno",
    0 => array("classic", "soul"),
    "corolla"
);

print_r($carros);

$video = $_GET["v"];

echo "video" .$video;

define("URL", "www.meusite.com.br");

echo "Minha URL é ".URL;


// print_r($_SERVER);

?>
*/
?>
<?php

if(isset($_POST["email"])) {

    $nome = $_POST["email"];
    file_put_contents("teste.txt", $nome, FILE_APPEND);
    header("location: index.php");
}

?>


<form method="POST">
    Email:<br/>
    <input type="text" name="email" /><br/><br/>
    <input type="submit" value="Enviar dados" />


</form>