<?php

class CoreA
{
    public function target()
    {
        echo "core -> target";
    }
}

class CoreB
{
    public function target()
    {
        echo "core -> target";
    }
}

class Container
{
    public $core;

    public function set($outCore = null)
    {
        $this->core = $outCore;
    }

    public function call()
    {
        $this->core->target();
    } // it is a private case.
}


$container = new Container();
$container->core = new CoreA();
$container->call();
$container->set(new CoreB());
$container->call();

