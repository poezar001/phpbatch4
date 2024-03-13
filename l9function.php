<?php

//User Defined Function

// function name(){
// 	code to be executes;
// }
 //....................................

//Parameter Function (or) Arguments function

//(i)single
//(ii)Multiple
 
 // function name($arg1){
 // 	code to be executed;
 // }


 // function name($arg1,$arg2){
 // 	code to be executed;
 // }
 //....................................

//Default Parameter Function (or) Default Argument Function
// function name($name="aung aung",$age=20){
 // 	code to be executed;
 // }
 //....................................

function myfun(){
	echo 'my name is zinmarhtay';
}
myfun();
myfun();
//....................................

function myfun1(){
	$num1 = 10;
	$num2 =20;
	$cal = $num1+$num2;

	echo $cal;
}

myfun1();
//....................................

function singlefun($name){
	echo "My name is $name";
}

singlefun("aung auung");
singlefun("su su");

//....................................

function multifun($name,$age){
	echo "My name is $name and i am {$age} years old .";
}

 multifun("kyaw kyaw",26);
 multifun("nandar",30);

//....................................

function defaultfun($name="Hla Hla"){
	echo "My name is ${name}. ";

}

defaultfun();//My name is Hla Hla. 
defaultfun("Aye Aye");//My name is Aye Aye. 


function defaultfun1($num1=10,$num2 = 20,$num3=30){
	$cal =$num1+$num2+$num3;
	echo $cal;
}

defaultfun1();//60
defaultfun1(50,10);//90
defaultfun1(70,5,15);//90
//....................................

//Return function
function myreturn($num1){
	$cal = $num1+10;
	return $cal;
}

echo myreturn(50);//60

//(or)

function returnfun1($num1){
	return $cal = $num1+10;
	
}

echo returnfun1(100);//110

function returnfun2($num1,$num2,$num3){
	$cal = $num1+$num2+$num3;
	return $cal;
}

echo returnfun2(10,20,30);//60


function returnfun3($num1=10,$num2=20,$num3=30){
	$cal = $num1+$num2+$num3;
	return $cal;
}

echo returnfun3(50);//100
echo returnfun3();
//....................................
//=> Dynamic Function Call
$dyn1 = myreturn();
echo $dyn1;// 110 just get value not dynamic

$dyn2= returnfun3();
echo $dyn2;//60 just get value not dynamic


$dyn3 = "returnfun1"; //Dynamic Function Call
echo $dyn3; //returnfun1

echo $dyn3(100); //110 is equal echo returnfun1()

$myfun ="aungaung";
echo $myfun;

if(function_exists($myfun)){
	echo "Yes, your variable value is already in some kind of function.";

}else{
	echo "No";
} // check the variable that is exists






?>