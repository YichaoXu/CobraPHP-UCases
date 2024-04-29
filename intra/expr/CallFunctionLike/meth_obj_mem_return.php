<?php

class Createe
{
    function action()
    {
        echo "ACTION\n";
    }
}

class Creator
{

    function linked()
    {
        $this->createe()->action();
    }

    function action()
    {
        $createe = $this->createe();
        $createe->action();
    }

    function createe()
    {
        return new Createe();
    }
}

$creator = new Creator();
$creator->action();
$creator->linked();



