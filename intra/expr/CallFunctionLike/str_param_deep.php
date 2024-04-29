<?php
function one_param1($param): void
{
    echo "one_param \t";
    one_param2($param);
}

function one_param2($param): void
{
    echo "one_param \t";
    one_param3($param);
}

function one_param3($param): void
{
    echo "one_param \t";
    one_param4($param);
}

function one_param4($param): void
{
    echo "one_param \t";
    $param();
}

function no_param(): void
{
    echo "no_param\n";
}

one_param1("no_param");
