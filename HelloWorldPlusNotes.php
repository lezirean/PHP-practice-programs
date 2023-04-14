<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"> 
  </head>

  <body>
    <?php
      echo "Hello, World!";
    ?>

  </body>
</html>

// Concatenation in output: echo "I like ".$variable." very much.";

//  VARIABLE SCOPE
// Use the keyword 'global' to access a global variable from within a function. No need to use 'global' when declaring a global variable
// Use 'static' keyword to retain the value of the variable from within the function. Each time the function is called, that variable will still have the information it contained from the last time the function was called.

//  COMPARISON OPERATORS
//  == equal
//  === identical, returns true if variables x and y are equal and of the same type
//  !== not identical, returns true if variables x and y are not equal OR they are not of the same type 
// <=> spaceship, returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7.

//  LOGICAL OPERATORS
//  xor, works as '||' but only one of the variables strictly must be true.

//  STRING OPERATORS
// .= concatenation assignment $txt1.=$txt2, appends $txt2 to $txt1  

// ARRAY OPERATORS
// '+' union, $arr1 + $arr2, union of the arrays
// '==' equality, $arr1 == $arr2, returns true if $arr1 and $arr2 have the same key/value pairs
// '===' identity, $arr1 === $arr2, returns true if $arr1 and $arr2 have the same key/value pairs in the same order and of the same types
// and their negations

//  CONDITIONAL ASSIGNMENT OPERATORS
// $x = expr1 ? expr2 : expr3, ternary operator
// ?? null coalescing, $x = expr1 ?? expr2, the value of $x is expr1 if expr1 exists, and is not NULL.
If expr1 does not exist, or is NULL, the value of $x is expr2.
Introduced in PHP 7