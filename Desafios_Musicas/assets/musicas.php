<?php
// Verificando a Variavel setada
if (isset($_GET['ordem'])){
    $ordem = $_GET ['ordem'];
}

$tipo = "nome";

if (isset($_GET['tipo'])){
    $tipo = $_GET ['tipo'];
}

$musica["Ai Se Eu Te Pego"] = "Michel Teló";
$musica["Parabéns a Você"] = "Bertha Celeste";
$musica["Get Lucky"] = "Daft Punk Feat Pharell Williams and Nile Rodgers";
$musica["Jenifer"] = "Gabriel Diniz";
$musica["Camaro Amarelo"] = "Munhoz e Mariano";
$musica["Lê Lê Lê"] = "João Neto e Frederico";
$musica["Timber"] = "Pitbull e Kesha";
$musica["Gatinha Assanhada"] = "Gusttavo Lima";
$musica["Mandou Bem"] = "Jota Quest e Nile Rodgers";
$musica["Sugar"] = "Maroon 5";
$musica["Medo Bobo"] = "Maiara & Maraisa";
$musica["Maus Bocados"] = "Cristiano Araújo";
$musica["Humilde Residência"] = "Michel Teló";
$musica["Amar não é Pecado"] = "Luan Santana";
$musica["Pescador de Ilusões"] = "O Rappa";
$musica["Regime Fechado"] = "Simone & Simaria";
$musica["Notificação Preferida"] = "Zé Neto & Cristiano";
$musica["Dança Kuduro"] = "Latino & Daddy Kall";
$musica["Shape of you"] = "Ed Sheeran";
$musica["Propaganda"] = "Jorge & Mateus";

if ($tipo == 'nome' && $ordem == 'desc') {
    krsort ($musica);
}

elseif ($tipo == 'sigla' && $ordem == 'desc') {
    arsort ($musica);
}

elseif ($tipo == 'nome' && $ordem == 'asc') {
    ksort($musica);
}
else {
    asort($musica);
}
?>