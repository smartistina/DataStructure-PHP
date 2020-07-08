<?php
include_once './php/tree.php';

$elemento = new tree(8);

$nodo = new node(6);
$nodo2 = new node(7);
$nodo3 = new node(5);
$nodo4 = new node(10);

$nodoroot = $elemento->searchNodo(8);
//echo $nodoroot->getId();
$elemento->addFiglio(8, $nodo);
$elemento->addFiglio(8, $nodo2);
$elemento->addFiglio(6, $nodo3);
$elemento->addFiglio(7, $nodo4);
//$elemento->addFiglio(8, $nodo2);
//$elemento->addFiglio(7, $nodo2);
//$nodoroot->setFiglio($nodo2);


print_r($nodoroot->getFigli());


$elemento->stampa();
/*
foreach($nodoroot->getFigli() as $el){
  echo $el->getId();
}
*/


//echo $elemento->searchNodo(7)->getId();
//$nodo= new node(5);


//print_r($elemento->searchNodo(6)->getId());







?>



<html>
<head>
</head>
<body>
</body>
</html>
