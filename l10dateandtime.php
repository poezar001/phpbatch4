<?php
//1 jan 1970 UTC
date_default_timezone_set("Asia/Yangon");

$getdate = getdate();
//echo $getdate;//error
var_dump($getdate);
echo "<pre>".print_r($getdate,true)."</pre>";

echo "This is seconds = ".$getdate["seconds"];
echo "This is minutes = ".$getdate["minutes"];
echo "This is hours = ".$getdate["hours"];


echo "This is weekday = ".$getdate["weekday"]; //Tuesday
echo "This is wday = ".$getdate["wday"];//0sun 1monday 2 tue
echo "This is yday = ".$getdate["yday"]; // 64 day of the year


echo "This is month = ".$getdate["month"]; //March
echo "This is mon = ".$getdate["mon"]; // 3 day of month
echo "This is mday = ".$getdate["mday"]; // 5

echo "This is year = ".$getdate["year"]; // 2024


echo "This is 0 = ".$getdate["0"]; //  1709654883

$time =time();
echo "This is 0 = ".$time; // 1709654883


//DATE/TIME Format

//date(format,timestampe);

$date = date("a",$time);
echo "This is format a = ".$date;//am pm

$date = date("A",$time);
echo "This is format A = ".$date;//AM PM

$date = date("d",$time);
echo "This is format d = ".$date; // day leading zero


$date = date("D",$time);
echo "This is format D = ".$date;//Tue Sun Mon


$date = date("F",$time);
echo "This is format F = ".$date;//March

$date = date("g",$time);
echo "This is format g = ".$date;//10 hour  no leading zero  12hour format

$date = date("G",$time);
echo "This is format G = ".$date;  //22 hour  no leading zero  24hour format


$date = date("H",$time);
echo "This is format H = ".$date; //10 hour  leading zero  24hour format

$date = date("h",$time);
echo "This is format h = ".$date;//22 hour leading zero  12hour format

$date = date("i",$time);
echo "This is format i= ".$date;//01 minutes


$date = date("j",$time);
echo "This is format j = ".$date;//5 day of month no leading zero

$date = date("l",$time);
echo "This is format l = ".$date;// Tuesday  weekday

$date = date("L",$time);
echo "This is format L = ".$date;//1  this is leap year(1=true, 0=false)


$date = date("m",$time);
echo "This is format m = ".$date;//03 month leading zero

$date = date("M",$time);
echo "This is format M = ".$date;//Mar short term

$date = date("n",$time);
echo "This is format n = ".$date;//3 month no leading 0

$date = date("s",$time);
echo "This is format s = ".$date;// seconds


$date = date("U",$time);
echo "This is format U = ".$date;// miliseconds


$date = date("y",$time);
echo "This is format y = ".$date;// 24 year shortcode

$date = date("Y",$time);
echo "This is format Y = ".$date;//2024 year longcode



$date = date("z",$time);
echo "This is format z = ".$date; //64 days of year

$date = date("Z",$time);
echo "This is format Z = ".$date;//



?>