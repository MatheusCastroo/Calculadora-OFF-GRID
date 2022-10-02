<?php
$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
$num3 = $_GET["num3"];
$opcao = $_GET["opcao"];

switch ($opcao) {
    case "res1":
        $res1 = $num1 * $num2 * $num3;
        echo "<b>Consumo diário é de $res1(Wh/dia)</b>";
        break;
    case "res2":
        $res2 = $num1 * $num2 * $num3;
        echo "<b>Consumo Diário é de $res2(Wh/dia)</b>";
        break;
}
/* Oque falta para concluir a calculadora OFF-GRID
1 - Conseguir usar o formulario de html para que soma o valor com mais de um item, tanto de CC e CA, somar CA + CC para ter um resultado total SEM CORREÇÃO
2 - Estudar matrizes para somar o valor das potências (Calculo é linha * linha, após multiplicar as linhas, somamos tudo.)
3 - Criar um formulário com dados considerados (ex: Eficiencia da bateria, eficiencia do inversor, dias de autonomia, etc...)
4 - Definir banco de bateria 
5 - Definir a potencia do gerador fotovoltaico (FV)
6 - Algumas anotações no caderno de possiveis caminhos a se seguir */

?>