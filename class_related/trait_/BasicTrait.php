<?php

namespace class_related\trait_;
trait BasicTrait { public function func() {} }

namespace class_related\trait_;
class TraitUse {
    use BasicTrait;
}

$obj = new TraitUse();
$obj -> func();