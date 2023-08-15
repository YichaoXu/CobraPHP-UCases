<?php
class AncestorClass
{
    private $name = "ancestor private name";

    public function run()
    {
        echo "IN Ancestor: $this->name\n";
    }
}

class ParentClass extends AncestorClass
{
    protected $name = "parent protected name";

    public function run()
    {
        echo "IN Parent: $this->name\n";
    }
}

class ChildClass extends ParentClass
{
    public $name = "child public name";

    public function run()
    {
        echo "IN Child: $this->name\n";
    }

    public function run_parent()
    {
        ParentClass::run();
    }

    public function run_ancestor()
    {
        AncestorClass::run();
    }
}

$obj = new ChildClass();
$obj->run();
$obj->run_parent();
$obj->run_ancestor();
