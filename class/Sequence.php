<?php

abstract class Sequence
{

  abstract protected function isEmpty() : bool;
  abstract public function get() : ?string; //pop function
  abstract public function put(string $item) : void; //push function

}

?>
