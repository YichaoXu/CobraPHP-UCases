<?php

class Createe { function action() { echo "ACTION\n"; } }

class Creator {

    function createe() { return new Createe(); }

    function action() { $this -> createe() -> action(); }
}

$creator = new Creator();
$creator -> action();
