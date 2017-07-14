# phpfileeditor
Insert line into file on specific line (PHP)

If you need to read a file and edit a specific line and don't change other you can use php file and file_put_contents.

file will read the file you want.

What you need to do is only read the file, when you open the file they are an array, so you need to choose the line and change. Remember, array starts on 0.

Ex.

$readFile = file("text.txt");

$readFile[10] = "changed line";

file_put_contents("text.txt", $readFile);

file_put_contents will save the file you opened.
