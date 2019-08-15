
<html>
<body>
	



<?php 

function imagem_original($imagem){
/*
     $normal = "https://image.tmdb.org/t/p/w185_and_h278_bestv2/2bXbqYdUdNVa8VIWXVfclP2ICtT.jpg";
*/

  $normal = $imagem;

$img = "https://image.tmdb.org/t/p/original/";

$explode = explode('/', $normal);

$image = $explode[6];

$original = $img.''.$image ;


echo "<img src='{$original}' >";

 



}

   $normal = "https://image.tmdb.org/t/p/w185_and_h278_bestv2/7IRy0iHdaS0JI3ng4ZYlk5gLSFn.jpg";

imagem_original($normal);

 ?>
</body>
 </html>