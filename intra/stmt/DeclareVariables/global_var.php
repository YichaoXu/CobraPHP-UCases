<?php
$a = "callee";
function callee() { echo "CALLEE\n"; } 

function caller() { 
    global $a; 
    $a(); 
}

caller();
