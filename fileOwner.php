<?php
function groupByOwners(array $files) : array
    
{
   
    $result = [];
    foreach($files as $k=>$v)
    {
       

       
            //$data[]="Randy";
             $result[$v][]=$k;
     
      

    }
    
   return $result;
   // return $data;
}

$files = array
(
    "Input.txt" => "Randy",
    "Code.py" => "Stan",
    "Output.txt" => "Randy"
);
$result= groupByOwners($files);

echo "<pre>";
print_r($result);


?>
