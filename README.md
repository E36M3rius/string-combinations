# Intro
## String Combinations
I created this small package in order to showcase the algorithm used for generate string permutations.

# Usage
## Create instance
```php
$stringRandomizer = new RandomizeByPermutations(
  new Stringify($argv[1])
);
```
## Generate permutations
```php
$stringRandomizer->randomize()->getResult();
```
# Example of output
```php
php generateStringCombinations.php ABc32
1/120 [ ABc32 ]
2/120 [ ABc23 ]
3/120 [ AB2c3 ]
4/120 [ AB23c ]
5/120 [ ABc32 ]
6/120 [ ABc23 ]
7/120 [ AcB23 ]
8/120 [ AcB32 ]
9/120 [ Ac3B2 ]
10/120 [ Ac32B ]
```
