<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     // recuperação da data atual/data-corrente
    //   echo date('d/m/Y -  H:i');

    // //
    // echo '<br />';
    // echo date_default_timezone_get();
    // echo '<br />';
    // echo date_default_timezone_set('America/Sao_Paulo');
    // echo '<br />';
    // echo date('d/m/Y -  H:i');

    echo '<hr />';
    echo '<h1>Recuperação de datas</h1>';


     $data_inial = '2023-01-02';
     $data_final = '2024-01-02';

     $time_inicial = strtotime($data_inial);
     $time_final = strtotime($data_final);


     echo $time_inicial;
     echo '<hr />';
     echo $time_final;


     $diferenca = $time_final - $time_inicial;
     echo '<hr />';
     echo $diferenca;

     echo '<hr />';
     echo ' A diferença de segundo entre datas e :' . $diferenca;

     $segunda_dias = 24 * 60 * 60 ;
     echo '<hr />';

     echo 'Um dia possui : ' .  $segunda_dias ;

     $diferencia_datas = $diferenca/$segunda_dias;
     echo '<hr />';
     echo 'A diferenca entre a datas é ' .$diferencia_datas;
    ?>
</body>
</html>