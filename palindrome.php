<?php

function isPalindrome(string $word) 
{
    $lower = strtolower($word);
    $reverse = strrev($lower);
    
    if ($lower == $reverse){
    
    return true;
    }
    else{
    return false;
    }
}   

 var_dump(isPalindrome('wow'));