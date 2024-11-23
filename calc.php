<?php 
require"info.php";
//if else simplificado
$empregado = $empregado == true ? "empregado" : "não empregado";

/*
// if else não simplificado
if ($empregado == true) {
    $empregado = "Empregado";
} else {
    $empregado = "desempregado";
}
*/

//$aposentadoria = 40;
//define("DATA_DE_APOSENTADORIA_MULHER", 62);
//define("DATA_DE_APOSENTADORIA_HOMEM", 65);
$minecraft = "minecraft";
//logica da aposentadoria
/**
 * @param int $idade idade do cidadão
 * @param bool true para masculo e false para mulher
 * @return int retorna os anos até a aposentadoria
 */
function anosParaAposentadoria($idade,$sexo = true){
    $anosParaAposentarMasculino = 65;
    $anosParaAposentarFeminino  = 62;
 
    $anosTotaisParaAposentar = $sexo == true ? $anosParaAposentarMasculino - $idade : $anosParaAposentarFeminino - $idade;

    return $anosTotaisParaAposentar;

}

$aposentadoria =  anosParaAposentadoria(38,true);

//var_dump($aposentadoria);




//$anos_restantes_para_aposentar = $sexo == "M" ? DATA_DE_APOSENTADORIA_HOMEM - $idade : DATA_DE_APOSENTADORIA_MULHER - $idade;



$habilidades = ["php", "javascript", "html", "css"];
$habilidade = implode(",", $habilidades);

/**
 * formata os numero no de salario
 * se desejar o salario anual
 * esabeleça o segundo parametro como true
 * @param int o numero que será formatado
 * @param string se quiser a versão anual do numero preencha o segundo parametro como true
 * @return string
 */ 
function salarioFromat ($numero, $anual=false){
    //$numeroFormatado = number_format($numero, 2,",",".");
    
    if ($anual == true) {
        $valorAnual = $numero*12;
        $numeroFormatado = number_format($valorAnual, 2,",",".");
        return "R$".$numeroFormatado;
    } else {
        $numeroFormatado = number_format($numero, 2,",",".");
        return "R$$numeroFormatado";
    }

}

function numerosBrasileiros($numero){
    $numero = number_format($numero, 2,",",".");
    return $numero;
}
