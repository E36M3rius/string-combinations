<?php

class Stringify
{

  /**
   *
   * @var String $string
   */
  private $string;

  /**
   * Setting up the string.
   * @param String $string
   */
  public function __construct($string)
  {
    if (empty($string) || !is_string($string)) {
      throw new Exception("Invalid input provided.");
    }

    $this->string = $string;
  }

  /**
   * Deconstructs the string into an array of characters.
   * @return Array $characters
   */
  public function toArray()
  {
    // prepare string, length, array
    $string = $this->string;
    $stringLength = mb_strlen($string);
    $stringArray = array();

    // deconstruct using a for loop
    for($i = 0; $i < $stringLength; $i++) {
      array_push($stringArray, $string[$i]);
    }

    return $stringArray;
  }

  /**
   * Magic function toString.
   * @return string $this->string
   */
  public function __toString()
  {
    echo $this->string;
  }

  public function getString() {
    return $this->string;
  }

}
