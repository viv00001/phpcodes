<?php

$filename = "newfile.txt";

//Open the file for reading
$file = fopen($filename, "r");

if($file) {
    //Read and display the content of the file
    while(!feof($file)){
        $line = fgets($file);
        echom ($line);
    }
    //close the file
    fclose($file);

}
else{
    echo "Failed to open the file.";
}
?>