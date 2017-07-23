<?php

abstract class StringRandomizer
{

  /**
   * Abstraction of randomize().
   */
  abstract public function randomize();

  /**
   * Abstraction of getResult().
   */
  abstract public function getResult();

  /**
   * Common method for swapping characters in a string.
   * @param  string $string
   * @param  int $index1
   * @param  int $index2
   * @return string $string
   */
  public function swap($string, $index1, $index2)
  {
    $tmpString = $string[$index1];
    $string[$index1] = $string[$index2];
    $string[$index2] = $tmpString;

    return $string;
  }

}
