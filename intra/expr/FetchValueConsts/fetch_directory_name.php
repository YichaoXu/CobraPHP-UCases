<?php
function aFetchValueConsts(){ echo "fetch directory name success\n"; }
$var = __DIR__;
$var[0] = "a";
$var();
?>