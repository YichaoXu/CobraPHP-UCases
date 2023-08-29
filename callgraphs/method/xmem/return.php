<?php

class Createe { function action() { echo "ACTION\n"; } }

class Creator {

    function createe() { return new Createe(); }

    function action() {
        $createe = $this -> createe();
        $createe -> action();
    }
    function linked(){ $this -> createe() -> action(); }
}

$creator = new Creator();
$creator -> action();
$creator -> linked();
