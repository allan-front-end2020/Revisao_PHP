<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Array -Pesquisa</h1>
   <?php



 // in_array() = retorna true ou false  para exitenci ado que esta sendo procurado
 // array_search() = retorna o indice do valor pesquisado, caso ele exista

  $lista_fruta = array('Banana', 'Maça', 'Uva', 'pera');
  $lista_fruta1 = array('Banana', 'Maça', 'Uva', 'pera');

  echo '<pre>';
  print_r(  $lista_fruta);
  echo '<pre>';    
 

 $exite = in_array('Banana',  $lista_fruta );
  // se o texto é encontrado ou é true retorn 1
  // se o  texto não é encontrado ou é false retorn vazio
 
  if($exite){
     echo ' valor encontro';
  } else{
    echo ' valor não encontro';
  }
  echo '<h1>Array_search<h1/>';
  echo '<br/>';
  echo  array_search('Uva',$lista_fruta1 );
   ?>
</body>
</html>
