<html>
  <head>
      <title>Question 5 (Fucntions)</title>
  </head>  
    <body>
    <?php

    function calculateArea($length, $width) {
    // Area is calculated by multiplying length and width
     $area = $length * $width;
     return $area;
    }

    // Call it 
    $rectangleArea = calculateArea(5, 3);

    echo "The area of the rectangle is $rectangleArea";

    ?>
    </body>    
</html>




