<?php
namespace Src;
class MyFactorial
{
    public function myfactorial($n)
    {
       if(!is_numeric($n))

           return null ;
       elseif (! is_integer($n))
            return null;
       elseif ($n==1 || $n==0)
           return 1;
        else
            return myFactorial($n-1)*$n;

    }
}