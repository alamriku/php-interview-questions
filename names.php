<?php

function unique_names(array $array1, array $array2) : array
{
   // This gives only 25$ $unique_names=array_unique(array_merge(['Ava', 'Emma', 'Olivia'], ['Olivia', 'Sophia', 'Emma']));
    
    //this gives 100%
    $names1 = array_unique($array1);
    $names2 = array_unique($array2);
    $names1 = array_diff( $names1, $names2 );
    $names2=array_diff( $names2 , $names1);
    $names3=array_intersect($names1,$names2);
    $unique_names = array_merge( $names3,$names1, $names2);
    
    
    /*$names=[];
    $unique_names=[];
    $names= array_merge($array1,$array2);*/
    /*foreach($array1 as $val)
    {   $unique_names[]=$val;
        $names[]=$val;
    }*/
   /* foreach($array2 as $v)
    {
        $names[]=$v;
    }*/
   /* $diff=array_diff($names,$array1);
    $unique_names=array_merge( $array1, $diff);*/
  /* foreach($diff as $value)
   {
    $unique_names[]=$value;
   }
    //$unique_names[]= $diff;*/
    return $unique_names;
}

$names = unique_names(['Ava', 'Emma','Emma', 'Olivia'], ['Olivia','Olivia', 'Sophia', 'Emma']);
echo join(', ', $names); // should print Emma, Olivia, Ava, Sophia
