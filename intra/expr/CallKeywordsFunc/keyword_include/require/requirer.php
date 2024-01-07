<?php 
namespace n01;      // declare the file in n01;

// control flow will jump to the requiree.php
require_once("requiree.php"); 

function requirer_func(){echo "requirer_func\n";}

/* 
 * After line3, all "alias" will be handled as 
 * "n01" during name resolving, so the "alias\"
 * is actually equal to the "n01\" 
 */
requirer_func();  // requirer
requiree_func();  // requiree








