<?php

//Super Global Variables

// 1. $GLOBALS
// 2.$_SEVER
// 3.$_REQUEST
// 4.$_POST
// 5.$_GET
// 6.$_FILES
// 7.$_ENV
// 8.$_COOKIE
// 9.$_SESSION

// 1. $GLOBALS
// $x=100;
// $y=200;

// function sumresultone(){
// $total = $x+$y;
// return $total;
// }
//  echo sumresultone() ;
//  echo $total;  error

$x=100;
$y=200;

function sumresultone(){
$GLOBALS['total'] = $GLOBALS['x']+$GLOBALS['y'];
return $GLOBALS['total'] ;
}
 echo sumresultone() ;//300
 echo $GLOBALS['total'] ;//300
 echo $total;//300


// 2.$_SEVER

echo $_SEVER["PHP_SELF"]; //file path way

echo $_SEVER["HTTP_USER_AGENT"];//browser version

echo $_SEVER["HTTP_HOST"]; //

echo $_SEVER["SERVER_NAME"];
echo $_SEVER["SERVER_SOFTWARE"];
echo $_SEVER["SERVER_PORT"];
echo $_SEVER["SERVER_PROTOCOL"];
echo $_SEVER["SERVER_SIGNATURE"];
echo $_SEVER["REQUEST_METHOD"];
echo $_SEVER["REMOTE_ADDR"];
echo $_SEVER["SCRIPT_FILENAME"];
echo $_SEVER["SCRIPT_NAME"];
echo $_SEVER["QUERY_STRING"];

?>
