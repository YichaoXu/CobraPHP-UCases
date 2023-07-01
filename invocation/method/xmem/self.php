<?php

class Test{
    private function callee(){echo "test1\n"; $this -> caller(); }
    function caller(){ $this->callee(); }

}


$test = new Test();
$test->caller();