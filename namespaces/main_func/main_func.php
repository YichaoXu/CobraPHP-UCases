<?php

namespace {
    function func(){ echo "MAIN SPACE"; }
}

namespace TEST1 {
    func(); // /TEST1/func
    function func(){ echo "TEST SPACE"; }
}


namespace TEST2 {
    func(); // /func
}

