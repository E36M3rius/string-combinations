<?php

class RandomizeByPermutations extends StringRandomizer
{

  /**
   * @var array $permutations
   */
  private $permutations = array();

  /**
   * @var string $string
   */
  private $string;

  /**
   * Prepare the string.
   * @param Stringify $string
   */
  public function __construct(Stringify $string)
  {
    $this->string = $string->getString();
  }

  /**
   * Concrete implementation of the randomize. Initiates ->permute().
   * @return self instance
   */
  public function randomize()
  {
    $this->permute(0, $this->getStringLength());
    return $this;
  }

  /**
   * Concrete implementation of getResult(). Getter for ->permutations.
   * @return array permutations
   */
  public function getResult()
  {
    return $this->permutations;
  }

  /**
   * Count the string length.
   * @return int strlen
   */
  public function getStringLength()
  {
    return mb_strlen($this->string);
  }

  /**
   * Calculate the count for maximum possible permutations.
   */
  public function calculatePossiblePermutations()
  {
    // get the length of the string
    $length = $this->getStringLength();
    // always start at 1
    $permutations = 1;
    do {
      $permutations *= $length;
    } while (--$length > 0);

    return $permutations;
  }

  /**
   * Algorythm for calculating the permutations.
   * Stores the results in $this->permutations.
   * @param  int $i
   * @param  int $x
   */
  private function permute($i, $x) {
    // where $i starts at 0 and $x is the length of the string
    if ($i === $x) {
      // store result
      $this->permutations[] = $this->string;
    } else {
      // loop
      for($m = $i; $m < $x; $m++) {
        // swap
        $this->string = $this->swap($this->string, $i, $m);
        // recursive call
        $this->permute($i + 1, $x);
      }
    }
  }

}
