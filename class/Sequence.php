<?php

abstract class Sequence
{

  /** @var iterable */
  protected $list;

  protected function isEmpty() : bool
  {

    return $this->getFirstElement() == null;

  }

  abstract public function get() : ?string; //pop function
  abstract public function put(string $item) : void; //push function
  abstract protected function getFirstElement() : ?Node;

  public function getList() : iterable
  {

    $currentElement = $this->getFirstElement();

    while($currentElement != null)
    {

      yield $currentElement->getItem();

      $currentElement = $currentElement->getNext();

    }

  }

  public function printList() : void
  {

    $this->list = $this->getList();

    foreach($this->list as $item)

      echo $item . "\n";

  }

}

?>
