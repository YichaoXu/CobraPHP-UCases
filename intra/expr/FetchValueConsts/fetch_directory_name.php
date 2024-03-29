<?php
function func_FetchValueConsts(){ echo "fetch directory name success\n"; }
$var = substr(__DIR__, 1);
$var = "func_". $var;
$var();
?>