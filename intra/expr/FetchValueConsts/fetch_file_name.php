<?php
function php(){ echo "fetch file name success\n"; }
$var = __FILE__;
$var = $var[-3]. $var[-2]. $var[-1];
$var();
?>