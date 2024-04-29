<?php

function f1($cond)
{
    if ($cond) f2($cond);
    else echo "in f1\n";
}

function f2($cond)
{
    if (!$cond) f1($cond);
    else echo "in f2\n";
}

f1(true);
f2(false);