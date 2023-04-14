<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"> 
  </head>

  <body>

   <?php
    /* First method to create indexed array. */
    $numbers = array(1, 2, 3, 4, 5);
    foreach($numbers as $value) {
    echo 'Value is $value <br />';
    }
    /* Second method to create array. */
    $numbers[0] = 'one';
    $numbers[1] = 'two';
    $numbers[2] = 'three';
    $numbers[3] = 'four';
    $numbers[4] = 'five';
    foreach($numbers as $value) {
    echo 'Value is $value <br />';
    }
  ?>

  </body>
</html>


<!-- ITERATING THROUGH EVERY ELEMENT IN THE ARRAY
  $cars = array("Volvo", "BMW", "Toyota");
  $arrlength = count($cars);

  for($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
  }

***************************************************
  ASSOCIATIVE ARRAY

  $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
  echo "Peter is " . $age['Peter'] . " years old."; 

  or

  $age['Peter'] = "35"; VALUES COULD ALSO BE STRINGS
  $age['Ben'] = "37";
  $age['Joe'] = "43";

  looping through each element

  foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
  }

*****************************************************
  MULTIDIMENSIONAL ARRAY

  for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>"; NOTE: p for paragraph, b for bold, ul for unordered list
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
      echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
  }

*********************************************************
  MULTIDIMENSIONAL AND ASSOCIATIVE ARRAY COMBINATION

  $marks = array(
    'mikasa' => array(
    'physics' => 35,
    'maths' => 30,
    'chemistry' => 39
    ),
    'eunice' => array(
    'physics' => 30,
    'maths' => 32,
    'chemistry' => 29
    ),
    'jane' => array(
    'physics' => 31,
    'maths' => 22,
    'chemistry' => 39
    )
  );

/* Accessing multi-dimensional array values */

echo 'Marks for Mikasa in physics : ' ;
echo $marks['mikasa']['physics'] . '<br />';
echo 'Marks for Eunice in maths : ';
echo $marks['eunice']['maths'] . '<br />';
echo 'Marks for Jane in chemistry : ' ;
echo $marks['jane']['chemistry'] . '<br />';

***********************************************************
  SORTING FUNCTIONS FOR ARRAY

  sort($arrayName) - sort arrays in ascending order
  rsort($arrayName) - sort arrays in descending order
  asort($arrayName) - sort associative arrays in ascending order, according to the value
  ksort($arrayName) - sort associative arrays in ascending order, according to the key
  arsort($arrayName) - sort associative arrays in descending order, according to the value
  krsort($arrayName) - sort associative arrays in descending order, according to the key
-->