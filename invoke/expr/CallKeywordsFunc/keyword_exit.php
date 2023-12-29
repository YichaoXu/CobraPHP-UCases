<?php

function targetA() { echo "TARGET A"; }
function targetB() { echo "TARGET B"; }

targetA();
exit(1);
targetB();
