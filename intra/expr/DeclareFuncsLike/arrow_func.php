<?php
// 1. This is a basic arrow function
$basic_arrow_func = fn() => "1. BASIC ARROW FUNCTION\n";
echo $basic_arrow_func(); // call annoClosure@User:3; call echo@Builtin; 

// 2. This is a arrow with inner call 
function some_func($data){ echo "some_func： $data\n";} // call echo@Builtin
$arrow_with_inner_call = fn($param) => some_func($param); // call some_func@User:7
$arrow_with_inner_call("2. INNER CALL"); // call annoClosure@User:8

// 3. This is a arrow with if condition
$arrow_nested_with_iner = 
	fn($param1) => 
		fn($param2) => $param1($param2); // call annoClosure@User:8
$curring_func = $arrow_nested_with_iner($arrow_with_inner_call); 
$curring_func("3. NESTED INNER"); // call annoClosure@User:12
