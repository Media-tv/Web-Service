<?php 
header('Content-Type: application/json');

$foo = new StdClass();
$foo->TMBDB_API_KEY = "d08157e78b7478bea59e97af188b7054";
$foo->Alluc_API_KEY = "1062e98c3af6a3aa7998a3993d2a3ea9";
$foo->OPENLOAD_API_Login = "169a92673705ce52";
$foo->OPENLOAD_API_KEY = "B5vw4WjV";


$json = json_encode($foo);
echo $json;

?> 