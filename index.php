<?php

//* Null Coalesce Operator ??

//$_GET['name'] = 'Bob';

//$name = isset($_GET['name']) ? $_GET['name'] : 'nothing'; //* This is a lot to write.

//* ??
//$name = $_GET['name'] ?? 'nothing';

//var_dump($name);

$name = "Gene Belcher";

echo $name ?? 'Bob Belcher';





/* End of file */
