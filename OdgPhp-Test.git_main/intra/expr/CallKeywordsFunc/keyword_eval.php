<?php
$eval_str = " function some_func() { echo 'ECHO IN FUNC;\n' ;} "; 

eval($eval_str);

some_func();
