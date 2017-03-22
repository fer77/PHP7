<?php 
// declare(strict_types=1);

//Scalar Typehints: 
function setAge(int $age)
{
	# code...
}

setAge(30); // Not entirely strict, int will accept something like setAge('30').  To make scalar typehints strict add: declare(strict_types=1); at the top.

function setIsValid(bool $valid)
{
	var_dump($valid);
}

setIsValid(true);  //As always 1 is true -1 and 0 return false.  A 'string' is turned into a bool.  Objects and arrays are not coherced.
setIsValid('some string');

 ?>