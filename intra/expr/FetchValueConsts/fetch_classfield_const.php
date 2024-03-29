<?php
function func_314(){ echo "fetch PI classfield success\n"; }
function func_Hello(){ echo "fetch GREETING classfield success\n"; }
class Example {
    const PI = 3.14;
    const GREETING = "Hello";
}
$a = (Example::PI)*100;
$var = "func_". $a;
$var();
$var = "func_". Example::GREETING;
$var();
?>