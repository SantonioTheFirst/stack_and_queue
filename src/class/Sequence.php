<?php

namespace SantonioTheFirst\Structures;

abstract class Sequence
{

  /** @var iterable */
  protected $list;

  public function isEmpty() : bool
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

  public function contains(string $item) : bool
  {

    $this->list = $this->getList();

    foreach ($this->list as $current)

      if($current == $item)

        return true;

    return false;

  }

}

?>
