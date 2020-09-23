#Filter
<?php

       function findUniqueNumbers (array $numbers) : array
       {
              return array_diff($numbers, array_diff_assoc($numbers, array_unique($numbers)));
              //return the unique number and delete the number in double.
       }

       print_r(findUniqueNumbers( [2, 1, 1, 3] )) ;
