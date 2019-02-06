<?php

class Path
{
    public $currentPath;

    function __construct(string $path)
    {
        $this->currentPath = $path;
    }

    public function cd(string $newPath) 
    {
        $currentItems = explode('/',$this->currentPath);
   $newItems = explode('/',$newPath);
   //this is for parent to child  path     
   if($newPath[0] !== "/")
        {
            foreach($newItems as $value)
            {
                if($value === "..")
                
                {
                   array_pop($currentItems); 
                }
                else
                {
                    array_push($currentItems,$value);
                }
            }
            return $this->currentPath=implode('/',$currentItems);
        }    //end of absolute path

        else
        {
            //this for root path
            return $this->currentPath = $newPath;
        }
        return $this->currentPath;
    }

}

$path = new Path('/a/b/c/d');
$path->cd('/x');
//echo $path->currentPath;
echo "<pre>";
print_r($path->cd('/x'));