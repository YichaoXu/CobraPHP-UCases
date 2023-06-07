<?php

function no_param(): void { echo "no_param\n"; }

function one_param_1($param): void { echo "one_param_1 \t"; $param(); }

function one_param_2($param): void { echo "one_param_2 \t"; $param(); }

function two_param($param1, $param2): void { echo "two_param \t"; $param1($param2); $param2(); }

two_param(param1: "one_param_1", param2: "no_param");

two_param(param2: "no_param", param1: "one_param_2");
