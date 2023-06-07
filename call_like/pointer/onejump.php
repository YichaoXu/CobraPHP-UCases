<?php

function no_param(): void { echo "no_param\n"; }

function one_param_1($param): void { echo "one_param_1 \t"; $param(); }

function one_param_2($param): void { echo "one_param_2 \t"; $param(); }

one_param_1("no_param");

one_param_2(param: "no_param");
