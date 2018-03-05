<?php

/*
Author: Chenghao (Peter) Pan
*/

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);

$contacts = new Trie();

for($a0 = 0; $a0 < $n; $a0++){
    fscanf($handle,"%s %s",$op,$contact);
    
    if( $op == 'add' )
        $contacts->add($contact);
    
    if( $op == 'find' )
        echo $contacts->find($contact) . "\n";
    
}


class Trie{
    private $index = [];
    
    function add($contact){
        for( $i = 1; $i <= strlen($contact); $i++ ){
            $char = substr($contact, 0, $i); //store char as hash key 
            
            if( isset($this->index[$char]) ){
                $this->index[$char] +=1;
            }else{
                $this->index[$char] = 1;
            }
            
        }
    }
    
    function find($partial){
        return (isset($this->index[$partial]) ) ? $this->index[$partial] : 0;
    }
    
}


?>

