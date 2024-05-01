<?php

class Property
{
    function target($data): void
    {
        echo "property->target\n" . $data;
    }
}

class Basic
{
    public Property $property;

    public function __construct()
    {
        $this->property = new Property();
    }

    public function target($data): void
    {
        $this->property->target($data);
    } // L4

}

$vul_data = $_GET["user-input"];
$sec_data = "security-data";

$basic = new Basic();

$basic->target($vul_data);
$basic->target($sec_data);

$basic->property->target($vul_data);
$basic->property->target($sec_data);
