<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $num1 = 10;
     $num2 = 10;

     echo "A soma  entre $num1 e  $num2 é  = " .( $num1 + $num2 ) ;
     echo "<br/>";
     echo "A subtracao  entre $num1 e  $num2 é  = " .( $num1 - $num2 ) ;
     echo "<br/>";
     echo "A multiplicação  entre $num1 e  $num2 é  =" .( $num1 * $num2);
     echo "<br/>";
     echo "A divisão   entre $num1 e  $num2 é  =" .( $num1 / $num2);
     echo "<br/>";
     echo "O resto da divisão   entre $num1 e  $num2 é  =" .( $num1 % $num2);




     echo"<hr>"
    
    ?>
    <?php
     $num11 = 10;

     echo "<h1> atribução de variavel com operador aritmitico<h1/>";

    //  $num11 = $num11 + 2999;
     $num11 +=  2999;

     echo 'O novo  valor atribuido é : ' . $num11;
    
    ?>
</body>
</html>