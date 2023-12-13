<?php
function no_param(): void { echo "no_param\n"; }
function single_param($param): void { echo "single_param \t"; $param(); }
single_param("no_param");
