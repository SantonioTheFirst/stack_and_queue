<?php

require_once 'class/Node.php';
require_once 'class/Sequence.php';
require_once 'class/Stack.php';
require_once 'class/Queue.php';


$queue = new Queue();

$queue->put('Ivan');

$queue->put('Fedor');

$queue->put('Petr');

echo 'Queue:' . "\n";

echo $queue->get() . "\n";

echo $queue->get() . "\n";

echo $queue->get() . "\n\n";

$stack = new Stack();

$stack->put('Ivan');

$stack->put('Fedor');

$stack->put('Petr');

echo 'Stack:' . "\n";

echo $stack->get() . "\n";

echo $stack->get() . "\n";

echo $stack->get() . "\n";

?>
