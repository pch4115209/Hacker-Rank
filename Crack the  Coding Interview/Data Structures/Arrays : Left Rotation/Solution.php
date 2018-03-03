<?php
/*
Author: Chenghao (Peter) Pany
*/

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d",$n,$k);
$a_temp = fgets($handle);
$a = explode(" ",$a_temp);
array_walk($a,'intval');

function arrayLeftRot($a, $n, $k){
    $result = [];
    $output = '';
    
    if( is_numeric($k) ){
        for( $i = 0; $i < $n; $i++ ){
             $new_index = ( $i + $n - $k ) % $n;
            
             $result[$new_index] = $a[$i];
        }
        
        for($i = 0; $i < $n; $i++){
            $output.=$result[$i] . ' ';
        }
        
        return trim($output);
    }
        
    return false;
}

echo arrayLeftRot($a, $n, $k);

?>

