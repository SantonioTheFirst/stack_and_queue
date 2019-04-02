<?php

require_once 'vendor/autoload.php';

$queue = new \SantonioTheFirst\Structures\Queue();

$queue->put('Ivan');

$queue->put('Fedor');

$queue->put('Petr');

echo 'Queue:' . "\n";

$queue->printList();

$stack = new \SantonioTheFirst\Structures\Stack();

$stack->put('Ivan');

$stack->put('Fedor');

$stack->put('Petr');

echo "\n" . 'Stack:' . "\n";

$stack->printList();

?>


