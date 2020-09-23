#Array Sum
<?php

     function prependSum (array $array) : int
     {
         $sum = array_sum($array) ;
         array_unshift ($array, $sum) ;
         var_export($array);
         return $sum;
      //I store the sum of the array and I added it to my initial array
     }
     
     $arr = array(1, 2, 3) ;
     echo ( $sum . PHP_EOL );
     print_r (prependSum ($arr));
     

?>
