<?php

function make_pipeline( )
{
    $funs       =   func_get_args();
   
    return function($arg) use ($funs)
    {
       //$arr=[];
        foreach($funs as $fun)
        {
            $v = &$arg;
            $v= $fun($v);
        }
          
        
        return $v;
        
    };
    array_walk($funs);
}

$fun = make_pipeline( function($x) { return $x * 3; },
                      function($x) { return $x + 1; },
                      function($x) { return $x / 2; } );
                     // echo "<pre>";
print_r($fun(3)) ; // should print 5