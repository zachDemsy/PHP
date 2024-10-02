<?php
//iterable Pseudotype
function printItems(iterable $items) {
    foreach ($items as $item) {
        echo $item . "\n";
    }
}
//callable Pseudotype
function executeCallback(callable $callback) {
    $callback();
}
//calling  the callable pseudotype
executeCallback(function() {
    echo "Hello, world!\n";
});
//calling the iterable pseudotype
printItems(['apple', 'banana', 'cherry']);

?>
