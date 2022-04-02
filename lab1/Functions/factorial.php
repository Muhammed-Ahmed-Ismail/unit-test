<?php
function myFactorial($n)
{
    if($n==1)
    {
        return 1;
    }elseif ($n==0)
    {
        return 1;
    } elseif ($n<0)
    {
        return null;
    }elseif (!is_integer($n))
    {
        return null;
    }else
    {
        return myFactorial($n-1)*$n;
    }
}