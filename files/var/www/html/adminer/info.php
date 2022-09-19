<?php

/*
$request_url = $_SERVER["HTTP_X_FORWARDED_PREFIX"] . $_SERVER["REQUEST_URI"];
$request_url = preg_replace("/\/+$/", "", $request_url);
$_SERVER["REQUEST_URI"] = $request_url;
*/

//var_dump( $_SERVER["HTTP_X_TEST"] );
//var_dump( $_SERVER["HTTP_X_FORWARDED_PREFIX"] );
//var_dump( $_SERVER["REQUEST_URI"] );

//phpinfo();

echo "<pre>";
var_dump($_SERVER);
echo "</pre>";
