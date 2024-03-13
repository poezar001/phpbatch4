<?php
//=>arrays
//(i)Indexed array (manual array)
//(ii) Associative array
//(iii) Multidimensional array

//(i)Indexed array (manual array)
$names = array("aung aung","maung maung","zaw zaw","kyaw kyaw","tun tun");
//echo $names;
//print $names;

echo count($names);
var_dump($names);
print_r($names,false);

$colors =["red","green","blue","black","white","pink"];
//echo $colors; error

echo count($colors);
print_r($colors,false);
// echo "<pre>".print_r($colors,true)."</pre>"

$colors[6]="gray";
$colors[7]="stone";
$colors[8]="skyblue";
$colors[0]="violet";

echo "<pre>".print_r($colors,true)."</pre>";
echo count($colors);
echo "My fav color is ".$colors[8];

//............................................................
//(ii) Associative array
$news = array("pone"=>"this is post one", "ptwo"=>"this is post two","pthree"=>"this is post three");
echo count($news);
var_dump($news);

$medias =[
	"pone"=>"this is post one", 
	"ptwo"=>"this is post two",
	"pthree"=>"this is post three"
];
echo count($medias);
var_dump($medias);

$medias["pfour"]="this is post four";
$medias["pthree"]="this is new post three";

echo count($medias);
var_dump($medias);

echo "i like this post. so post title is ".$medias["pthree"];
//...............................................................

//(iii) Multidimensional array

$paints = array(
	array("red","green","blue"),
	array("pen","pencil","ruler"),
	array("paper","plastic"),
);
echo count($paints);
var_dump($paints);


$maincolors =[
	["red","green","blue"],
	["pen","pencil","ruler"],
	["paper","plastic"]
];
echo count($maincolors);
var_dump($maincolors);

echo $maincolors[0][0];//red
echo $maincolors[2][1];//plastic
echo $maincolors[1][2];//ruler

$persons = array(
	array("name"=>"aung aung","age"=>20),
	array("name"=>"su su","age"=>18),
	array("name"=>"nu nu","age"=>23)
);
echo count($persons);


$vippersons = [
	["name"=>"aung aung","age"=>20],
	["name"=>"su su","age"=>18],
	["name"=>"nu nu","age"=>23]
];

echo count($vippersons);
var_dump($vippersons);

echo $vippersons[0]["name"]; //aung aung
echo $vippersons[0]["age"];//20

echo $vippersons[2]["name"];//nu nu
echo $vippersons[1]["age"];//18




?>