<?php

function targetA() { echo "TARGET A"; }
function targetB() { echo "TARGET B"; }

targetA();  // userdef: @line 3
exit(1);    // builtin: exit[core]
targetB();  // userdef: @line 4
