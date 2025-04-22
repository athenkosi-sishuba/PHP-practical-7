<html>
	<head>
		<title>Question 3(Strings)</title>
	</head>
		
		
		<body>
		<?php
		//defined my function
		function processText($text) {
		
		
		// used the inbuilt trim fuction to reduce  to trim it
		$text = trim($text);
 
 
		// Convert the text to lowercase
		$text = strtolower($text);
		return $text;
}

		//used a varriable to add the sentence 
		$myuserInput = "     HI MY NAME IS ATHII  ";
		$processedText = processText($myuserInput);

		echo $processedText;
?>
		</body>







</html>
