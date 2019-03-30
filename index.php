<?php

require_once 'class/Stack.php';

$stack = new Stack();

$stack->put('Ivan');

$stack->put('Fedor');

$stack->put('Petr');

echo $stack->get() . "\n";

echo $stack->get() . "\n";

echo $stack->get() . "\n";
?>
