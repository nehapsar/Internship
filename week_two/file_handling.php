 <?php

#The readfile() function reads a file content
echo readfile("example.txt");

#the fopen() function used to open a file for read only. File pointer starts at the beginning of the file
#fread() function used to read the file content there are two parameters one is file name and another one is size of file
#filesize() function used to print the size if file
#fclose() function used to close the file
$myfile = fopen("example.txt", "r");
echo fread($myfile,filesize("example.txt"));
fclose($myfile);

#The fgets() function is used to read a single line from a file.
$a=fopen("example.txt","r");
echo fgets($a);

#The fgetc() function is used to read a single character from a file.
$a=fopen("example.txt","r");
echo fgetc($a);

#The feof() function checks if the end of the file is reached.
#The feof() function is use for looping through data of unknown length of the file.
$myfile = fopen("example.txt", "r");
while(!feof($myfile)){
  echo fgets($myfile) . "\n";
}
fclose($myfile);

#flie_exist function checks the existence of file
if (file_exists("example.txt")) {
    echo "file already exists.";
   }

?>
