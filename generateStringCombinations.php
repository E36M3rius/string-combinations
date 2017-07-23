<?php

// include files, no Autoloader here.
require_once "String/String.php";
require_once "StringRandomizer/StringRandomizer.php";
require_once "StringRandomizer/RandomizeByPermutations.php";

// check if we have a valid argument
if (!isset($argv[1]) || !is_string($argv[1])) {
  throw new Exception("Input argument is missing. Eg.: php generateStringCombinations <stringArgument>");
}

// build instance of stringRandomizer
$stringRandomizer = new RandomizeByPermutations(
  new Stringify($argv[1])
);

// generate the permutations
$permutations = $stringRandomizer->randomize()->getResult();

// display results
$c = 1;
$totalC = $stringRandomizer->calculatePossiblePermutations();

foreach($permutations as $result) {
  echo "$c/$totalC [ ". $result ." ]\n";
  ++$c;
}
