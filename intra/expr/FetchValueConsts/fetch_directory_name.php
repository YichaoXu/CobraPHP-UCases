<?php
function Consts(){ echo "fetch directory name success\n"; }
$var = __DIR__;
$var = $var[65].$var[-5].$var[-4].$var[-3].$var[-2].$var[-1];
$var();
?>