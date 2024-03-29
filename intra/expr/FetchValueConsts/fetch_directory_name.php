<?php
function func_FetchValueConsts(){ echo "fetch directory name success\n"; }
$var = __DIR__;
$var[0] = null;
$var = "func_". $var;
$var();
?>