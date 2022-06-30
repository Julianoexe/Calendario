<?php
// Verificando a Variavel setada
if (isset($_GET['ordem'])){
    $ordem = $_GET ['ordem'];
}

$tipo = "nome";

if (isset($_GET['tipo'])){
    $tipo = $_GET ['tipo'];
}

$lingua["Python"] = 12.74;
$lingua["C"] = 11.59;
$lingua["Java"] = 10.99;
$lingua["C++"] = 8.83;
$lingua["C#"] = 6.39;
$lingua["Visual Basic"] = 5.86;
$lingua["JavaScript"] = 2.12;
$lingua["Assembly Language"] = 1.92;
$lingua["SQL"] = 1.87;
$lingua["PHP"] = 1.52;
$lingua["Delphi"] = 1.42;
$lingua["Swift"] = 1.23;
$lingua["R"] = 1.22;
$lingua["GO"] = 1.11;
$lingua["Classic Visual Basic"] = 1.03;
$lingua["Objetive - C"] = 1.03;
$lingua["Perl"] = 0.99;
$lingua["Lua"] = 0.98;
$lingua["Ruby"] = .86;
$lingua["MatLab"] = 0.82;


if ($tipo == 'nome' && $ordem == 'desc') {
    krsort ($lingua);
}

elseif ($tipo == 'sigla' && $ordem == 'desc') {
    arsort ($lingua);
}

elseif ($tipo == 'nome' && $ordem == 'asc') {
    ksort($lingua);
}
else {
    asort($lingua);
}
?>