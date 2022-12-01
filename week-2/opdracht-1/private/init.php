<?php

define("PRIVATE_PATH", dirname(__FILE__));
define("PROJECT_PATH", dirname(PRIVATE_PATH));
define("SHARED_PATH", PRIVATE_PATH . '/shared');

echo $_SERVER['SCRIPT_NAME'];
echo $_SERVER['DOCUMENT_ROOT'];

echo PROJECT_PATH;
echo PRIVATE_PATH;
echo SHARED_PATH;




?>