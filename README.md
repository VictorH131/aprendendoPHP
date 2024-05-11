    Comandos


\\ comandos PHP
**  para ativar o php precisa ter o seguite comando **
    
    <?php

    ?>


\\comando Execução/Escrita
**  ao colocar echo ele escreve oque for colocado entre aspas ou uma variavel   **

    echo "oq deveria ser escrito"; 

**  ao coocar um ponto após ele escrevera outra coisa   **

    echo "oq deveria ser escrito" . $variavel123; 


\\ tipos de variavel
**  atribuição de variavel, tipos de variavel são string, numerico e logico **

    $Variavel = 8;

**  adquirição de varivel (De outra tabela) **

    $VARIAVEL = $_POST["variavel"];


\\ Estrutura de Repetição

**  While : o sistema de repitição while é usado quando você não sabe quantas vezes o codigo deve se repitir, se a condição for verdadeiro o loop sera     executado, caso contrario (o comando seja falso) não executara, encerrando o loop . 
 i (contador), n (numero de vezes)
**       
    while ($i <= 10) {
        echo $i . "n";
            $i++;
    }


**  Do While :  O loop Do While é exencialmente parecido com o loop While, com a diferença de que a condição é testada no final de cada codigo. Isso significa que o loop será executado pelo menos uma vez, independentemente da condição.
 i (contador), n (numero de vezes)
**
    do {
        echo $i . n;
        $i++;
    }  while ($i <= 10);


**for: O loop for é usado quando você sabe quantas vezes a instrução deve ser repetida. Ele possui três partes: uma expressão inicial, uma condição de parada e uma expressão de incremento. A expressão inicial é executada antes do loop começar, se for verdadeira, o loop continua sendo executado. A expressão de incremento é executada ao final de cada iteração.
 i (contador), n (numero de vezes)
**
    for ($i = 1; $i <= 10; $i++) {
        echo $i . n;
    }



\\ Estrutura de Desvio
 ** para utilizar o comando de desvio utilizamos o 'if' se for verdadeira, caso seja falsa utilizamos o 'else', e para concatenarmos utilizamos o 'else if'
 **   
    if (condition) {                        
    
    }

** if else

    if (condition) {                        
    
    } else

** if else if

    if (condition) {                        
    
    } else if (condition) {

    }







