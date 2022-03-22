<?php
//PHP CAN [CREATE - DELETE - READ - WRITE - APPEND - ORGANIZE- Upload]
/*
 * Open File [Do Not Forget To specifiy your propose of opening][R (read) , W (write),A (Append)]
 * start (READ or WRITE)
 * CLose File
 */
$fileHandler=fopen('myfile.txt','r');
/*$fileSize=filesize('myfile.txt');
$content=fread($fileHandler,$fileSize);*/
while(!feof($fileHandler)){
    echo fgets($fileHandler)."<br>";
}
fclose($fileHandler);

$newHandler=fopen('names.txt','w');
fwrite($newHandler,'I will Write from PHP');
fclose($newHandler);
$myHandler=fopen('names.txt','a');
fwrite($myHandler,"\n This is New Line Written By PHP");
fclose($myHandler);
