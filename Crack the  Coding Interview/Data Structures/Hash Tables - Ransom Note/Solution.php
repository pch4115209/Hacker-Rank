<?php
/*
* Author: Chenghao (Peter) Pan
*/


$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d",$m,$n);
$magazine_temp = rtrim(fgets($handle)); // Need to trim the trailing \n in the string
$magazine = explode(" ",$magazine_temp);
$ransom_temp = fgets($handle);
$ransom = explode(" ",$ransom_temp);

$result = ransom_note($m, $n, $magazine, $ransom) ? 'Yes' : 'No';
echo $result;

function ransom_note($m, $n, $magazine, $ransom){
    //If the length of ransom note is longer
    //than that of magazine, return false
    if( $n >  $m )
        return false;
    
    $wordsVisited = [];
    
    // Loop through each word and
    // store them in the hashtable
    for($i = 0; $i < count($ransom); $i++){
        $word = $ransom[$i];
        
        if( isset($wordsVisited[$word]) )
            $wordsVisited[$word] +=1;
        else
            $wordsVisited[$word] = 1;
    }
 
    // Iterate words from magazine
    for($i = 0; $i < count($magazine); $i++){
        $word = $magazine[$i];
        
        if( isset($wordsVisited[$word]) ){
            $wordsVisited[$word]--;
        }
    }
    
    //Iterate all chars stored in the hashtable from Ransom note 
    //return false if not all words have been re-visited
    foreach( $wordsVisited as $count){
        if($count > 0)
            return false;
    }
    
    return true;
}

?>

