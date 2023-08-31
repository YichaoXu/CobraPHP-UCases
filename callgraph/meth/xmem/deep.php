<?php
class Test{
    private function callee2() { echo "callee2\n"; }
    private function callee1(){ echo "callee1\n"; $this -> callee2(); }
    function caller(){ $this->callee1(); }

}


$test = new Test();
$test->caller();
