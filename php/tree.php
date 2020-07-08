<?php


class tree{

  private $rootnode;

  public function __construct($id)
  {
    $this->rootnode = new node($id);
    //$this->$rootid = $id;
  }

public function getRoot()
{
  return $this->rootnode;
}

public function addFiglio($idpadre, $nuovonodo)
{

  $padre = $this->searchNodo($idpadre);

  //controllo che l id del nuovo nodo non esista gia
  if($this->searchNodo($nuovonodo->getId())!=null){
    return null;
  }
  //echo $this->searchNodo($nuovonodo);
  $padre->setFiglio($nuovonodo);
}

//id -> nodo con quell id
public function searchNodo($id)
{
  return $this->getChildById($this->rootnode, $id);
}


  public function getChildById($root, $id){
      if ($root->getId()==$id) return $root;
      foreach ($root->getFigli() as $node){
          $found = $this->getChildById($node, $id);
          if ($found) return $found;
      }
  }

public function stampa()
{
  $this->stampap($this->rootnode);
}

  public function stampap($root)
  {
    echo '<ul id="'.$root->getId().'">';
    echo '<li>'.$root->getId().'</li>';
    foreach ($root->getFigli() as $node){
      $this->stampap($node);
    }
    echo '</ul>';

  }
}



class node
{
  private $id;
  private $padre;
  private $figli = array();

  public function __construct($id)
  {
    $this->id = $id;
  }

public function getId()
{
  return $this->id;
}



public function getPadre()
{
  return $this->padre;
}

public function setPadre($padre)
{
  $this->padre= $padre;
}


public function setFiglio($nuovofiglio)
{
  $nuovofiglio->setPadre($this->getId());
  array_push($this->figli, $nuovofiglio);
}


public function getFigli()
{
  return $this->figli;
}


}




?>
