<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Pós incremento</h3>
    <?php
     $a = 7;

     echo "O valor contido em A é: $a <br>";
     echo "O valor contido em A após o incremento é: " . $a++ . ' <br>';
     echo "O valor atualizado é: $a";
    ?>
    <h3>Pre incremento</h3>
    <?php
     $a = 7;

     echo "O valor contido em A é: $a <br>";
     echo "O valor contido em A pre o incremento é: " .++$a . ' <br>';
     echo "O valor atualizado é: $a";
    ?>
    <h3>Pós decremento</h3>
    <?php
     $a = 7;

     echo "O valor contido em A é: $a <br>";
     echo "O valor contido em A pre o decremento é: " .$a-- . ' <br>';
     echo "O valor atualizado é: $a";
    ?>
    <h3>Pos decremento</h3>
    <?php
     $a = 7;

     echo "O valor contido em A é: $a <br>";
     echo "O valor contido em A pre o incremento é: " .--$a . ' <br>';
     echo "O valor atualizado é: $a";
    ?>
</body>
</html>