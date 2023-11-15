<?php
function generator($n)
{
    for ($i = 1; $i <= $n; $i++) {
        $output = '';

        if ($i % 3 == 0) {
            $output .= 'Hello';
        }

        if ($i % 5 == 0) {
            $output .= 'World';
        }

        echo $output ?: $i;
        echo PHP_EOL;
    }
}

$n = 100;
if ($argc > 1 && is_numeric($argv[1])) {
    $n = (int) $argv[1];
}

generator($n);
