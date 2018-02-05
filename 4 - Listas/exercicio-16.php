<?php
/*
16 - Utilize uma lista para resolver o problema a seguir. Uma empresa paga seus vendedores com base em comissões. O vendedor recebe $200 por semana mais 9 por cento de suas vendas brutas daquela semana. Por exemplo, um vendedor que teve vendas brutas de $3000 em uma semana recebe $200 mais 9 por cento de $3000, ou seja, um total de $470. Escreva um programa (usando um array de contadores) que determine quantos vendedores receberam salários nos seguintes intervalos de valores:

 a   $200 - $299
 b   $300 - $399
 c   $400 - $499
 d   $500 - $599
 e   $600 - $699
 f   $700 - $799
 g   $800 - $899
 h   $900 - $999
 i   $1000 em diante 


 Desafio: Crie uma fórmula para chegar na posição da lista a partir do salário, sem fazer vários ifs aninhados.
   */



?>



<form method="post">
<label> Informe o total bruto vendido: <label> <input type="number" name="bruto[]"> <br/> 
<label> Informe o total bruto vendido: <label> <input type="number" name="bruto[]"> <br/> 
<label> Informe o total bruto vendido: <label> <input type="number" name="bruto[]"> <br/> 
<label> Informe o total bruto vendido: <label> <input type="number" name="bruto[]"> <br/> 
<label> Informe o total bruto vendido: <label> <input type="number" name="bruto[]"> <br/> 
<label> Informe o total bruto vendido: <label> <input type="number" name="bruto[]"> <br/> 
<label> Informe o total bruto vendido: <label> <input type="number" name="bruto[]"> <br/> 
<label> Informe o total bruto vendido: <label> <input type="number" name="bruto[]"> <br/> 
<label> Informe o total bruto vendido: <label> <input type="number" name="bruto[]"> <br/> 
<label> Informe o total bruto vendido: <label> <input type="number" name="bruto[]"> <br/> 
<input type="submit">
</form>


<?php
$lista = array(
    'a' => 0,
    'b' => 0,
    'c' => 0,
    'd' => 0,
    'e' => 0,
    'f' => 0,
    'g' => 0,
    'h' => 0,
    'i' => 0
);



if(isset($_POST['bruto'])){
    foreach($_POST['bruto'] as $num){
        if($num != ''){
            $com = ($num * 0.09) + 200;
            //echo $com . " - ";
            if($com >= 200 && $com < 300){
                $lista['a'] +=1;
            } elseif($com >= 300 && $com < 400){
                $lista['b'] += 1;
            } elseif($com >=400 && $com < 500){
                $lista['c'] += 1;
            } elseif($com >= 500 && $com < 600) {
                $lista['d'] += 1;
            } elseif($com >= 600 && $com < 700){
                $lista['e'] += 1;
            } elseif($com >= 700 && $com < 800){
                $lista['f'] += 1;
            } elseif($com >= 800 && $com < 900){
                $lista['g'] +=1;
            } elseif($com >= 900 && $com < 1000){
                $lista['h'] +=1;
            } elseif($com >= 1000){
                $lista['i'] +=1;
            }
        }

    }

    echo "<pre>";
    print_r($lista);
    echo "<hr>";
        echo "</pre>";


}

?>