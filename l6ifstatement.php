<?php
//=> If statement

$x = 10;
$y = 20;

if($x > $y){
	echo "Your condition is yes";
}
if($x < $y){
	echo "Your condition is yes";
}

//=>if else
if($x > $y){
	echo "Yes, x greater than y";
}else{
	echo "No, x less than y"
}

//=>short Hand
if($x < $y)echo "yes, x less than y"; else echo "no, x greater than y";

$color = "gray";
$colorvalue = $color // assign to refrence

echo $color;
echo $colorvalue;

if($colorvalue === "red"){
	echo "My fav color is red";
}else {
	echo "I hate red color";
}

if($colorvalue === "red"){
	echo "My fav color is $color";
}else {
	echo "I hate red color";
}

//=> Logical operator && (and) b|| (or)  !(Not)
$a = 100;
$b = 200;
$c = 300;
if($a < $b && $b > $c){
	echo "it is true";
}else{
	echo "it is false";
}

if($a < $b && $b < $c){
	echo "it is true";
}else{
	echo "it is false";
}

if($a < $b || $b > $c){
	echo "it is true";
}else{
	echo "it is false";
}

if($a < $b || $b > $c && $a > $c){
	echo "it is true";
}else{
	echo "it is false";
}


if(($a < $b || $b > $c) && $a > $c){
	echo "it is true";
}else{
	echo "it is false";
}


if(!($a < $b )){
	echo "it is true";
}else{
	echo "it is false";
}

//=>If() elseif() else

if ($b > $c){
	echo "it is true";
}else if($b === 200){
	echo "it is equal";
}else{
	echo "it is false";
}


if ($b > $c)echo "it is true";else if($b === 200) echo "it is equal";else echo "it is false";

if ($b > $c)
	echo "it is true";
else if($b === 200)
	echo "it is equal";
else
	echo "it is false";

//=>Switch(condition){
// 	case stm1:
// 	code to be executed;
// 	break;
// 	case stm2:
// 	code to be executed;
// 	break;
// 	default:
// 	code to be executed;
// 	break;
// }

$phone ="iphone";
Switch($phone){
	case "sony":
	echo "i can't buy sony phone";
	break;
	case "iphone":
	echo "I hate apple products";
	break;
	case "mi":
	echo "oki, i can buy";
	break;

	case "samsaung":
	echo "my fav mobile product is samsaung";
	break;
	default:
	echo "i love keypad";
}


?>