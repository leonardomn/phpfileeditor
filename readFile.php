<?php

$readFile = file("text.txt");

$readFile[10] = "changed line";

file_put_contents("text.txt", $readFile, FILE_TEXT);

?>
cat 