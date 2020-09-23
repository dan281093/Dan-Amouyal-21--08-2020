#Filter
     <?php

     function  filterNumbersFromArray (array &$arr)  :  void
     {
       foreach ($arr as $key => $val){

              if (gettype($val) == 'string'){
      
                 unset($arr[$key]);
      
              }
          }
       //We check all values and if it is a string we remove it.
     }
 
     $arr = [1, 'a' , 'b' , 2];
      print_r ( array_values ( $arr ) ) ;
