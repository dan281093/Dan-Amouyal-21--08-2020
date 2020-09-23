#unieq_names
For example: calling unique_names([‘Dan’,’Ron’,’Boris], [‘Boris’,’Dan’, Ruth’]) should return:

[‘Dan’,’Ron’,’Boris,’Ruth’] in any order.
<?php
    $array1 = array('Dan','Ron','Boris');
    $array2 = array('Boris','Dan','Ruth');
    $output = array_unique(array_merge($array1, $array2));
    // We must use array_unique() in PHP to delete all the multiple value and keep only one time the value. 
    // array_merge() is use to make only one array.
    Print_r($output);
?>