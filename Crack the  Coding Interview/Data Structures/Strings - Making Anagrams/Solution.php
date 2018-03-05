<?php
// Author: Chenghao (Peter) Pan
    
$handle = fopen ("php://stdin","r");
fscanf($handle,"%s",$a);
fscanf($handle,"%s",$b);

function number_needed($a,$b){
    $numsVisited = [];
    
    //Iterate each char in the first string, and
    //save it into an associative array(hashmap)
    for( $i = 0; $i < strlen($a); $i++ ){
        
        $char = substr($a, $i, 1);
    
        if( isset($numsVisited[$char]) )
            $numsVisited[$char]++;
        else
            $numsVisited[$char] = 1;
    }
    
    //Iterate each char in the second string, and
    //decrements count by 1 if the char exists in both strings
    $count = 0;
    for( $i = 0; $i < strlen($b); $i++ ){
        $char = substr($b, $i, 1);
        
        if( isset($numsVisited[$char]) ){
            if( $numsVisited[$char] == 0 ){
                $count++;
            }else{
                $numsVisited[$char]--;
            } 
        }else{
            $count++;
        }
    }
    
    foreach($numsVisited as $value){
        $count+=$value;
    }
    
    
    
    
    
    return $count;
}

echo number_needed($a,$b);

?>

