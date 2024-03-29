<?php
    // ESTRUTURAS DE REPETIÇÃO EM PHP

    // Exemplo 1 : FOR
   echo "Exemplo 1: For <br>";
   for($i = 1;$i <= 5 ;$i++) {
       echo "Numero $i <br>";
   }

   // Exemplo 2: While
   echo "<br>Exemplo 2: while <br>";
   
   $contador = 1;
   while($contador <= 5) {
    echo "Numero $contador <br>";
    $contador++;
   }

   // Exemplo 3: do-While
   echo "<br>Exemplo 3: DO_WHILE <br>";
   $cont_do = 1;
   // garante que a condição seja execultada ao menos uma vez
   do {
    echo "Numero: $cont_do <br>";
    $cont_do++;
   } while ($cont_do <= 5);

   // EXEMPLO 4: FOREACH
   echo "<br>Exemplo 4: FOREACH <br>";
   $array_vogais = ["a","e","i","o","u"];
   foreach($array_vogais as $vogal) {
    echo "Vogal $vogal <br>"; 
   }

   // Exemplo 5: BREAK E CONTINUE
   echo "<br>Exemplo 5 : BREAK E CONTINUE <br>";
   for($i = 1; $i <= 10;$i++) {
        if($i == 3) {
            continue;
        }

        if($i == 8) {
            break;
        }
        echo "Numero $i <br>";
   }
?>