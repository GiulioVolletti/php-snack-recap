<?php 
 /*
  PHP Snack 1:
  Creiamo un array 'matches' contenente altri array i
  quali rappresentano delle partite di basket di
  un’ipotetica tappa del calendario. Ogni array della
  partita avrà una squadra di casa e una squadra
  ospite, punti fatti dalla squadra di casa e punti fatti
  dalla squadra ospite.
  Stampiamo a schermo tutte le partite con questo
  schema:
  Olimpia Milano - Cantù | 55 - 60
  */
  $matches = [
    [
        'casa'=> [
            'nome' => 'Olimpia Milano',
            'punti' => 55

        ],
        'ospite'=> [
            'nome' => 'Cantù',
            'punti' => 60
        ],
    ],
    [
        'casa'=> [
            'nome' => 'squadra 2',
            'punti' => 10

        ],
        'ospite'=> [
            'nome' => 'squadra 3',
            'punti' => 30
        ],
    ],
    [
        'casa'=> [
            'nome' => 'squadra 1',
            'punti' => 80

        ],
        'ospite'=> [
            'nome' => 'squadra 5',
            'punti' => 25
        ],
    ],
];

  for ($i=0; $i < count($matches) ; $i++) { 
      //Olimpia Milano - Cantù | 55 - 60
      echo $matches[$i]['casa']['nome'].' - '.$matches[$i]['ospite']['nome'].' | '.$matches[$i]['casa']['punti'].' - '.$matches[$i]['ospite']['punti'].'<br>';
  }
?>