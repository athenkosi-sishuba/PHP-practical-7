<html>
  <head>
      <title>Question 5 (Fucntions)</title>
  </head>  
    <body>
    <?php

    function calculateArea($length, $width) {
	// multiplying length and width to find area
     $area = $length * $width;
     return $area;
    }

    // Call it 
    $rectangleArea = calculateArea(5, 3);

    echo "The area of the rectangle is $rectangleArea";

    ?>
    </body>    
</html>




