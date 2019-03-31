<?php

class Queue extends Sequence
{
  /** @var Node */
  private $head;

  /** @var Node */
  private $last;

  public function get() : ?string //pop function
  {

    if($this->isEmpty()) return null;

    $item = $this->head->getItem();

    $this->head = $this->head->getNext();

    return $item;

  }

  public function put(string $item) : void //push function
  {

    $node = new Node($item);

    if($this->isEmpty())
    {
      $this->last = $node;
      $this->head = $node;
    }

    else
    {

      $this->last->setNext($node);

      $this->last = $node;

    }

  }

  protected function getFirstElement() : ?Node
  {

    return $this->head;

  }

}

?>
