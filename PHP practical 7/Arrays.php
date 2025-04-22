
<html>
    <head>
		<title>Movies</title>
    </head>
    <body>
<?php

$favorite_movies = [
  "John Wick 3" => [
    "release_year" => 2019,
    "genre" => "Action"
  ],
  "Black Panther" => [
    "release_year" => 2018,
    "genre" => "Action"
  ],
  "Avengers: Infinity War" => [
    "release_year" => 2018,
    "genre" => "Action"
  ]
];



//  I used a loop to print them out
foreach ($favorite_movies as $title => $movie_info) {
  echo "Title: $title, Release Year: " . $movie_info["release_year"] . ", Genre: " . $movie_info["genre"] . "\n";
}

?>

        
    </body>

</html>
