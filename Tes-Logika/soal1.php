<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Soal 1</title>
  </head>
  <body>
     
   <?php

   function printNumbers($N) {
     $count = 0;
     $num = 0;
     $result = array();
     
     while (count($result) < $N) {
       $num++;
       
       if ($num % 3 === 0 && $num % 7 === 0) {
         $result[] = 'Z';
       } elseif ($num % 3 === 0 || $num % 7 === 0) {
         $result[] = $num;
       }
       
       $count++;
     }
     
     echo implode(', ', $result);
   }
   
   $N = 13;
   printNumbers($N);
   
   
   ?>
  </body>
</html>
