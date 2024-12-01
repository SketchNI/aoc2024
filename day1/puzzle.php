<?php

$csv = file("input.csv");

$distances = [];
$firsts = [];
$seconds = [];
$diffs = [];


foreach ($csv as $item) {
    $items = explode(",", trim($item));

    $firsts[] = $items[0];
    $seconds[] = $items[1];
}

sort($firsts, SORT_NUMERIC);
sort($seconds, SORT_NUMERIC);

for ($i = 0; $i < sizeof($firsts); $i++) {
    $distances[] = abs($firsts[$i] - $seconds[$i]);

    $count = 0;
    foreach($seconds as $second) {
        if ($firsts[$i] == $second) {
            $count += 1;
        }
    }
    
    $diffs[] = ($firsts[$i] * $count);
}

print "Distances: " . array_sum($distances) . PHP_EOL;
print "Similarities: " . array_sum($diffs) . PHP_EOL;
