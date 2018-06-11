<?php 
//funções nativa do php para string
$nome = "joão rangel";

//strtoupper = UperCAse
$nome = strtoupper($nome);

echo $nome;
//strtolower = todo o texto minúsculo.
$nome = strtolower($nome);

echo '<br>';
echo "<hr>";

echo $nome;

//ucfirst deixa só a primeira palavra do texto maiúscula.
$nome = ucfirst($nome);

echo '<br>';
echo "<hr>";

echo $nome;


//ucwords - deixa a primeira letra de cada palavra maiúscula
$nome = ucwords($nome);

echo '<br>';
echo "<hr>";

echo $nome;

echo "<br>";
echo "<hr>";

//trocando texto de uma string

$empresa = "Hcode";

$empresa = str_replace("o", "0", $empresa);
$empresa = str_replace("e", "3", $empresa);

echo $empresa;
echo "<br>";
echo "<hr>";
//procurando a palavra dentro de uma String

$frase = "A repetição é mãe da retenção.";

$palavra = "mãe";

$q = strpos($frase, "mãe"); // pega até onde a posição vai a palavra nome

//pegando texto até a palavra "é"
$texto = substr($frase, 0, $q); // pega o texto até o valor da variável q

var_dump($q); //imprime a variável

echo "<br>";
echo "<hr>";

var_dump($texto);

echo "<br>";
echo "<hr>";

$texto2 = substr($frase, $q +strlen($palavra), strlen($frase)); // pegando texto depois da palavra mãe($palavra). 

var_dump( $texto2);



?>