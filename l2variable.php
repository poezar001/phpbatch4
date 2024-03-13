<?php

$fullname = "U Kyaw Kyaw";
$job = "Devleloper";


print $job;
echo $fullname;

print '$job'; //$job  can't use single code
echo "$fullname";// U Kyaw Kyaw


echo "My name is $fullname";//My name is U Kyaw Kyaw
echo 'My name is $fullname';//My name is $fullname


echo "My name is ${fullname}";//My name is U Kyaw Kyaw
echo "My name is{$fullname}";//My name is U Kyaw Kyaw

echo `My name is ${fullname}`;// error My name is $fullname
echo `My name is {$fullname}`;// error My name is $fullname

echo "He\'s my father, he is a $job";//He\'s my father, he is a Devleloper
echo "He's my father,he is a \$job";//He's my father,he is a $job
echo 'He\'s my father,he is a $job';
echo "He's my father,he is a \${job}";
echo "He's my father,he is a {\$job}";


$gender = echo "female";//error
$nation = print "burma";//burma

//Concat(.)
$firstname = "Aung";
$lastname = "Kyaw Kyaw";

echo $firstname;
echo $lastname;

echo $firstname.$lastname;
echo $firstname.' '.$lastname;

//Comments

#Single line Comments

/*Multi Line Comment
comment 1
comment 2*/



?>