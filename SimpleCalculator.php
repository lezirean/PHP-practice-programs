<!--
	Author: Leila Borromeo, BSIT 2-1
	Date: May 18, 2022
-->

<!DOCTYPE html>
<html>
  <head>
    <style>
      span {
        background-color: #80ced6;
      }
    </style>
  </head>

  <body>

    <form action = "" method = "POST">
       <p style="color:red;"><span> Enter First Number: </span>&nbsp;<input type = "text" value = "" name = "first_number"> </p>
      
      <label for = "operator" style = "color:#FBAA60">Select Operator </label>
      <select name = "operator">
        <option value="+">+</option>
        <option value="*">*</option>
        <option value="-">-</option>
        <option value="/">/</option>
      </select>
      <br>
     <p style="color:red;"><span>  Enter Second Number: </span>&nbsp;<input type = "text" value = "" name = "second_number"> </p>
        <br/>
      <input type="submit" style="background-color:#cccccc; border-color:black; color:#FBAA60" value="Calculate" name = "calculate_btn">
    </form>

    <?php

      if(isset($_POST['calculate_btn'])) {
        
        $first = $_POST['first_number'];
        $second = $_POST['second_number'];
        $operator = $_POST['operator'];
          
        if($first == "" || $second == "") echo "<br><p> <font color=red><span>Fill in all the fields.</span></font></p>";
        else {
          switch($operator){
            case "+": 
              $res = $first + $second;
              echo "<br><p> <font color=red><span>Output =  </span></font> <font color=red> <span> $res </span> </font> </p>";

            break;
            case "*": 
              $res = $first * $second;
              echo "<br><p> <font color=red><span>Output =  </span></font> <font color=red> <span> $res </span> </font> </p>";
            break;
            case "-": 
              $res = $first - $second;
              echo "<br><p> <font color=red><span>Output =  </span></font> <font color=red> <span> $res </span> </font> </p>";
            break;
            case "/": 
              if($second == "0") {
                echo "<br><p> <font color=red><span>You cannot divide by 0. Try again.</span></font></p>";
              } 
              else { 
                $res = $first / $second;
                echo "<br><p> <font color=red><span>Output =  </span></font> <font color=red> <span> $res </span> </font> </p>";
              }
          }
        }  
      };
    
    ?>

  </body>
</html>
