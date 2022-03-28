<?php
function myfactorial($n)
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
        return myfactorial($n-1)*$n;
    }
}