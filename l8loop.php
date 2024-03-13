<?php
//=>PHP Looping
// for
// foreach
// while
// do while

$colorsones = ["red","green","blue","black","gray","pink"];
echo count($colorsones);
var_dump($colorsones);

$colorsoneskey = array_keys($colorsones);
//echo $colorsoneskey; error
var_dump($colorsoneskey);

// for(start;end;?){
// 	code to be executed
// }

for($i=0;$i <count($colorsones);$i++){
	//echo $i;
//echo "This is indexed array or manual array by forloop = index key is ". $i ." and value is = ". $colorsones[$i] . "<br/>";
echo "This is indexed array or manual array by forloop = index key is ". $colorsoneskey[$i] ." and value is = ". $colorsones[$i] . "<br/>";
}

//foreach loop

foreach ($colorsones as $colorsone) {
	 echo "This is indexed array or manual array by foreach =".$colorsone;
}

foreach ($colorsones as $key=>$colorsone) {
	// echo $key;
	echo "This is indexed array or manual array by foreach = index key is ".$key ."and value is ".$colorsone;
}

//while loop
$x =0;
while($x < count($colorsones)){
	//echo $colorsones[$x];
	//$x++;
//echo "This is indexed array or manual array by while = index key is ".$x ."and value is ".$colorsones[$x]; $x++;
echo "This is indexed array or manual array by while = index key is ".$colorsoneskey[$x] ."and value is ".$colorsone[$x]; $x++;

}

$y =0;
do{
echo "This is indexed array or manual array by while = index key is ".$y ."and value is ".$colorsones[$y]; $y++;

echo "This is indexed array or manual array by while = index key is ".$colorsoneskey[$y] ."and value is ".$colorsone[$y]; $y++;

}while($y < count($colorsones));



?>