<?php

class Stack extends Sequence
{

  /** @var Node */
  private $last;

  public function __construct()
  {

    $this->last = null;

  }

  public function get() : ?string //pop function
  {

    if($this->isEmpty()) return null;

    $item = $this->last->getItem();

    $this->last = $this->last->getNext();

    return $item;

  }

  public function put(string $item) : void //push function
  {

    $this->last = new Node($item, $this->last);

  }

  protected function getFirstElement() : ?Node
  {

    return $this->last;

  }

}

?>
