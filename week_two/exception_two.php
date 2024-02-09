<?php

function readFileContent($filename) {
    try {
          $fileHandle = fopen($filename, 'r');
          if ($fileHandle === false) {
            throw new Exception("Could not open the file: $filename");
        }

        while (($line = fgets($fileHandle)) !== false) {
             echo $line;
        }

        fclose($fileHandle);
        } catch (Exception $e) {
               echo "Exception caught: " . $e->getMessage() . "\n";
    } 
}

readFileContent("example.txt"); 

?>
