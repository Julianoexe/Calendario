<?php
// Verificando a Variavel setada
if (isset($_GET['ordem'])){
    $ordem = $_GET ['ordem'];
}

$tipo = "nome";

if (isset($_GET['tipo'])){
    $tipo = $_GET ['tipo'];
}

$cidades["Americana - SP"] = 0.811;
$cidades["Ilha Solteira - SP"] = 0.812;
$cidades["Nova Lima - MG"] = 0.813;
$cidades["Santana de Parnaíba - MG"] = 0.814;
$cidades["Araraquara - SP"] = 0.815;
$cidades["Santo André - SP"] = 0.815;
$cidades["Vinhedo - SP"] = 0.817;
$cidades["Valinhos - SP"] = 0.819;
$cidades["Jundiaí - SP"] = 0.822;
$cidades["Curitiba - PR"] = 0.823;
$cidades["Brasilia - DF"] = 0.824;
$cidades["Joaçaba - SC"] = 0.827;
$cidades["Niterói - RJ"] = 0.837;
$cidades["Santos -SP"] = 0.840;
$cidades["Vitória - ES"] = 0.845;
$cidades["Balneário Camboriú"] = 0.845;
$cidades["Florianópolis"] = 0.847;
$cidades["Água de São Pedro"] = 0.854;
$cidades["São Caetano do Sul"] = 0.862;


if ($tipo == 'nome' && $ordem == 'desc') {
    krsort ($cidades);
}

elseif ($tipo == 'sigla' && $ordem == 'desc') {
    arsort ($cidades);
}

elseif ($tipo == 'nome' && $ordem == 'asc') {
    ksort($cidades);
}
else {
    asort($cidades);
}
?>