<?php
$str = "Hello a, b, c, d!";
$start = microtime(true);
for ($i = 0; $i < 100000; $i++) {
    $s = str_replace('a', '1', $str);
    $s = str_replace('b', '2', $s);
    $s = str_replace('c', '3', $s);
    $s = str_replace('d', '4', $s);
}
echo "Sequential: " . (microtime(true) - $start) . "\n";

$start = microtime(true);
for ($i = 0; $i < 100000; $i++) {
    $s = str_replace(['a', 'b', 'c', 'd'], ['1', '2', '3', '4'], $str);
}
echo "Array: " . (microtime(true) - $start) . "\n";
