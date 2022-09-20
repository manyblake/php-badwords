<?php

$text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat error ipsam sapiente nostrum vitae sint nesciunt doloribus veniam voluptas non, tempora quisquam corrupti voluptatem ratione rem impedit culpa adipisci placeat nulla excepturi, quas optio. Fugit repellendus nam rem nostrum excepturi in eum, numquam officiis cumque nesciunt neque! Voluptas, quos excepturi. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate quod consectetur officia ex quae dolores veniam tempora cumque deleniti laboriosam?";

$w = $_GET['word'];

echo $text;
echo "<br>";

$length = strlen($text);
echo $length;
echo "<br>";

$newString = str_replace($w, '***', $text, $count);
echo "<br>";

$length = strlen($newString);
echo $newString;
echo "<br>";

echo $length;

?>