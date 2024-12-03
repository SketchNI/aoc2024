<?php 

$data = file_get_contents(__DIR__ . "/../day3/input.txt");

$regex = "/mul\(([0-9]{1,}),([0-9]{1,})\)/";

preg_match_all($regex, $data, $matches, );

$mults = [];

for($i = 0; $i < sizeof($matches[0]); $i++) {
    $mults[] = $matches[1][$i] * $matches[2][$i];
}


//-------------------



echo "Part 1: " . array_sum($mults) . PHP_EOL;