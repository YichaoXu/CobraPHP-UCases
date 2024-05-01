<?php

class Core
{
    function behavior()
    {
        echo "SOME BEH\n";
    }
}

class InnerA
{
    function core()
    {
        return new Core();
    }
}

class InnerB
{
    function core()
    {
        return new Core();
    }
}

class Outer
{

    public Core $core;

    function inner($someCond = true)
    {
        if ($someCond)
            $inner = new InnerA();
        else
            $inner = new InnerB();
        $this->core = $inner->core();
        return $this->core;
    }

    function behavior()
    {
        $this->core->behavior();
    }
}

$out = new Outer();
$out->inner();
$out->behavior();
$out->core->behavior();
