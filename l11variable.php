<?php
//Variables Scope
//(i) Global variable scope
//(ii)Local variable scope
//(iii)Static variable scope

$num1 =100;//Golbal variable that is used in function

function funone(){
	echo "Global variable print in function = $num1";
}

funone(); //error

echo "Global variable print in outside = $num1";//Global variable print in outside = 100


function funtwo(){
	$num2 = 200;// Local variable
	echo "Local variable print in function = $num2";
}

funtwo();//Local variable print in function = 200

echo "Local variable print in outside = $num2";//error


//=>global keywork
$num3 =300;
$num4 =400;

function funthree(){

	//global $num3;
	//global $num4;
	//(or)
global $num3,$num4;
global $result;

	$result = $num3 + $num4;

	echo "This is result, print by funthree = $result";
}

funthree();

echo "Local variable print outside = $result";



//=>Super global variables

$num5 = 500;
$num6 = 600;

function funfour(){
	$GLOBALS["sum"]=$GLOBALS['num5']+$GLOBALS['num6'];
	//echo "This is sum, print by function =$sum"; //error

}

funfour();

echo "Local variable print outside =$sum";  //Local variable print outside =1100



//=>Static keywork
$num7 = 700;
function funfive(){
	global $num7;
	$num7++;

	echo $num7;
}
funfive();//701
funfive();//702
funfive();//703
funfive();//704
funfive();//705



function funsix(){
	$num8 = 800;
	$num8++;

	echo $num8;
}
funsix();//801
funsix();//801
funsix();//801
funsix();//801
funsix();//801



function funseven(){
	Static $num9 = 900; 
	
	$num9++;

	echo $num9;
}

funseven();//901
funseven();//902
funseven();//903
funseven();//904
funseven();//905




//=> passing by references (pr &)

$num10 = 100;

function funeight($num10){
	$num10 = 10000;
	echo $num10;
}

echo $num10;//100
funeight($num10);//100
echo $num10;//100

$num11 = 110;

function funnine(&$num11){
	$num11 = 11000;
	echo $num11;
}

echo $num11;//110
funnine($num11);//11000
echo $num11;//11000



$name ="aung aung";
$fullname="aung aung oo"
function funten(&$val){
	$val ="su su";
	echo $val;
}

echo $name;
funten($name);
echo $name;
echo $name;

echo $fullname;

?>