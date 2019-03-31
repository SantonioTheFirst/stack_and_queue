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

$queue->printList();

$stack = new Stack();

$stack->put('Ivan');

$stack->put('Fedor');

$stack->put('Petr');

echo "\n" . 'Stack:' . "\n";

$stack->printList();

?>
