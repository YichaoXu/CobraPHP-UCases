<?php

class Core
{
    public function target()
    {
        echo "core -> target";
    }
}

class Container
{
    public $core;

    public function call()
    {
        $this->core->target();
    } // it is a private case.
}


$container = new Container();
$container->core = new Core();
$container->call();

