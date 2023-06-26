<?php

function no_param(): void { echo "no_param\n"; }
function one_param($param): void { echo "one_param \t"; $param(); }
function two_param($param1, $param2): void { echo "two_param \t"; $param1($param2); }

two_param("one_param", "no_param");
