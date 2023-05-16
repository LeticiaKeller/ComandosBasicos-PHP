<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "style.css">
    <title>Variable</title>
</head>
<body>
    
    <?php echo "<h1>Variaveis</h1>";?>
    
    <div class="aula"><?php
     $nome = "Letícia Keller";
     $idade = 24;
     $curso = "Sistemas de Informação";
     $periodo = 4;
     echo "<h2>Criado por: $nome</br>$idade anos de idade, </br>Estudante de: $curso $periodo ° periodo.</h2>";
    ?></div>
    
    <div class="aula2"><?php
     echo "<h3>Operadores aritméticos</h3>";
     $n1 = 4;
     $n2 = 5.5;
     echo "</br><h4>Os valores inseridos são: $n1 e $n2.</h4>";
     echo "</br>A soma é igual a: ". ($n1+$n2);
     echo "</br>A subtração é igual a: ". ($n1-$n2);
     echo "</br>A multiplicação é igual a: ". ($n1*$n2);
     echo "</br>A divisão é igual a: ". ($n1/$n2);
     echo "</br>O modulo é igual a: ". ($n1%$n2);
     echo "</br>O valor absoluto de $n2 é: ". abs($n2);
     echo "</br>O valor de $n1 <sup>$n2</sup> é: ". pow($n1,$n2);
     echo "</br>A raiz de $n1 é: ". sqrt($n1);
     echo "</br>O valor de $n2 arredondado é: ". round($n2);
     echo "</br>A parte inteira de $n2 é: ". intval($n2);
     echo "</br>O valor de $n1 em moeda é: R$". number_format($n1);
     ?></div>;

     <div class="aula3"><?php
     echo "<h3>Operadores aritméticos com inserção feita pelo usuário</h3>";
     $v1 = 9;
     $v2 = 8;
     echo "</br><h4>Os valores inseridos são: $v1 e $v2.</h4>";
     echo "</br>A soma é igual a: ". ($v1+$v2);
     echo "</br>A subtração é igual a: ". ($v1-$v2);
     echo "</br>A multiplicação é igual a: ". ($v1*$v2);
     echo "</br>A divisão é igual a: ". ($v1/$v2);
     echo "</br>O modulo é igual a: ". ($v1%$v2);
     echo "</br>O valor absoluto de $v2 é: ". abs($v2);
     echo "</br>O valor de $v1 <sup>$v2</sup> é: ". pow($v1,$v2);
     echo "</br>A raiz de $v1 é: ". sqrt($v1);
     echo "</br>O valor de $v2 arredondado é: ". round($v2);
     echo "</br>A parte inteira de $v2 é: ". intval($v2);
     echo "</br>O valor de $v1 em moeda é: R$". number_format($v1);
     ?></div>;

     <div class="aula4"><?php
     echo "<h3>Operadores de atribuição</h3>";
     $preco = 20;
     echo "</br><h4>O preço inserido é: $preco.</h4>";
     echo "</br>O valor total com 10% de desconto é R$ ". number_format($preco -= $preco*10/100);
     echo "</br>O valor com acrescimo de 5% é: R$". number_format($preco += $preco*5/100);
    /*Os operadores de atribuição são usados quando você tem a mesma variavel dos dois lados da operação
    ex: $preco = $preco + 1 que pode ser transformado em $preco += 1.
    operadores:
    += soma
    -= subtração
    *= multiplicação
    %= modulo
    /= divisão
    . concatenação */
    $anoa = 2023;
    echo "</br><h4>O ano atual é: $anoa.</h4>";
     echo "</br>o ano anterior é: ". --$anoa; #pré decremento /$ano--: pós decremento
     $anoa = 2023;
     $anoa ++;
     echo "</br>o próximo ano é: ". $anoa++; #pós incremento / ++$ano: pré incremento
     echo "</br><h3>Variáveis referenciadas:</h3>";
    $a = 5;
    $b = $a;
    $b += 3;
    echo "</br> A variavel A é: $a e a variavel B que foi referenciada a A é: $b.";
    #ou
    //variavel de variavel
    $c = "Leticia";
    $$c = "Adriana";
    echo "</br> A variavel C é: $c e a nova variavel é $Leticia.";
     ?></div>

<div class="aula5"><?php
     echo "<h3>Operadores Relacionais</h3>";
     echo "</br> Maior: > ";
     echo "</br> Menor: < ";
     echo "</br> Maior ou igual: >= ";
     echo "</br> Menor ou igual: <= ";
     echo "</br> diferente: <> / != ";
     echo "</br> igual: == ";
     echo "</br> identico: === ";
     echo "<h3>Operadores lógicos</h3>";
     echo "</br> e: and / &&";
     echo "</br> ou: or / || ";
     echo "</br> xor: xor "; ##somente quando uma das opção é verdadeira
     echo "</br> nao: ! ";
     $ano = 1998;
     $idade = 2023 - $ano;
     echo "Ex votação: Quem nasceu no ano $ano tem $idade anos de idade.";
     $voto = $idade>18 && $idade<64? "Você é obrigado a votar!": "Você não é obrigado a votar!";
     echo "</br> $voto"
     ?></div>
     
</body>
</html>