<?php 
require"info.php";

$empregado = $empregado == true ? "empregado" : "não empregado";




/**
 * calcula os anos faltantes para aposentadoria
 * @param int $idade idade do cidadão
 * @param bool true para masculo e false para mulher
 * @return int retorna os anos até a aposentadoria
 */
function anosParaAposentadoria(int $idade,bool $sexo = true){
    $anosParaAposentarMasculino = 65;
    $anosParaAposentarFeminino  = 62;
 
    $anosTotaisParaAposentar = $sexo == true ? $anosParaAposentarMasculino - $idade : $anosParaAposentarFeminino - $idade;

    return $anosTotaisParaAposentar;

}





$habilidades = ["php", "javascript", "html", "css"];
$habilidade = implode(",", $habilidades);

/**
 *faz o calculo do salario anual junto com o decimo terceiro.
 * @param int $salario aqui é o salario mensal
 * @return float 
 */ 
function salarioAnual (float $salario):string{
    //$numeroFormatado = number_format($numero, 2,",",".");
    $decimoTerceiro =$salario /3;
    $salarioAnual = ($salario*12)+ $decimoTerceiro;
    return numerosBrasileiros($salarioAnual);
    
}

function numerosBrasileiros(float $numero):string{
    $numero = number_format($numero, 2,",",".");
    return $numero;
}


