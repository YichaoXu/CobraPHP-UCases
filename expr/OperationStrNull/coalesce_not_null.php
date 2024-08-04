<?php
function echo_info_1()
{
    echo "Hello world 1!";
}

function echo_info_2()
{
    echo "Hello world 2!";
}

$a = 'echo_info_1';
$action = $a ?? 'echo_info_2';
$action(); // calls echo_info_1