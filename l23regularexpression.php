<?php

$string = "We are family";
echo $string;

//preg_match(pattern,string)

// $result = preg_match("We are family",$string); // error

$result = preg_match("/We are family/", $string); // true
$result = preg_match("/family/", $string); // true
$result = preg_match("/Family/", $string); // false
$result = preg_match("/mily/", $string); // true

$result = preg_match("/mily$/", $string); // true
$result = preg_match("/family$/", $string); // true
$result = preg_match("/Family$/", $string); // false
$result = preg_match("/are$/", $string); // false
$result = preg_match("/we$/", $string); // false

$result = preg_match("/^mily/", $string); // false
$result = preg_match("%^are^%", $string); // false
$result = preg_match("#^we#", $string); // false
$result = preg_match("/^We/", $string); // true

$result = preg_match("/^family$/", $string); // false   Note  :: string must be exactly "family"
$result = preg_match("/^$/", $string); // false         Note  :: string must be empty

$result = preg_match("/^we/", $string); // false
$result = preg_match("/^we/i", $string); // true
$result = preg_match("/^We/i", $string); // true

$result = preg_match("/[b-d]/", $string); // false
$result = preg_match("/[a-f]/", $string); // true
$result = preg_match("/[a-z]/", $string); // true
$result = preg_match("/[A-Z]/", $string); // true
$result = preg_match("/[0-4]/", $string); // false

$string = "my lucky number is 567";

$result = preg_match("/[0-4]/", $string); // false
$result = preg_match("/[5-9]/", $string); // true
$result = preg_match("/[a-z]/", $string); // true
$result = preg_match("/[A-Z]/", $string); // false
$result = preg_match("/[A-Z]|[a-z]/", $string); // true
$result = preg_match("/[A-Z,a-z]/", $string); // true
$result = preg_match("/^[a-z]/", $string); // true
$result = preg_match("/[a-z]$/", $string); // false
$result = preg_match("/^[5-9]/", $string); // false
$result = preg_match("/[5-9]$/", $string); // true

$result = preg_match("/[^a-z]/", $string); // true      Note :: it means that it does not have to include a to z ! The result is true because $string contains space and digit
$result = preg_match("/[^5-9]/", $string); // true      Note :: it means that it does not have to include 5 to 9 ! The result is true because $string contains space and string
$result = preg_match("/[^0-4]/", $string); // true      Note :: it means that it does not have to include 0 to 4 ! The result is true because $string contains space and digit

$string = "admin@gmail.com";

$result = preg_match("/@/", $string); // true
$result = preg_match("/m/", $string); // true
$result = preg_match("/m+/", $string); // true
$result = preg_match("/b/", $string); // false
$result = preg_match("/b+/", $string); // false
$result = preg_match("/b?/", $string); // false
$result = preg_match("/b*/", $string); // true
$result = preg_match("/b?/", $string); // true

$result = preg_match("/m{1}/", $string); // true
$result = preg_match("/m{2}/", $string); // false

$string = "adminn@gmail.com";

$result = preg_match("/n{1}/", $string); // true
$result = preg_match("/n{2}/", $string); // true
$result = preg_match("/n{3}/", $string); // false
$result = preg_match("/n{2,3}/", $string); // true
$result = preg_match("/n{2,}/", $string); // true
$result = preg_match("/\s/", $string); // false

$string = "V8 Engine";
$result = preg_match("/\s/", $string); // true
$result = preg_match("/\d/", $string); // true
$result = preg_match("/\D/", $string); // true
$result = preg_match("/\w/", $string); // true
$result = preg_match("/\W/", $string); // true

$string = "528";
$result = preg_match("/\d/", $string); // true
$result = preg_match("/\D/", $string); // false
$result = preg_match("/\w/", $string); // true
$result = preg_match("/\W/", $string); // false

$string = "admin@gmail.com";

$result = preg_match("/a\wm/", $string); // true
$result = preg_match("/a\w{1}m/", $string); // true
$result = preg_match("/a\w{2}m/", $string); // false    , it has to be exactly 2 words          //adbmin@gmail.com          <-This is the right answer
$result = preg_match("/a\w{2,4}m/", $string); // false  , it has to be exactly 2 to 4 words     //adbcdmin@gmail.com        <-This is the right answer
$result = preg_match("/a\w{2,}m/", $string); // false   , it can be 2 or more words             //adbcdefgmin@gmail.com     <-This is the right answer

$result = preg_match("/a.m/", $string); // true
$result = preg_match("/a..m/", $string); // false       // adbmain@gmail.com
$result = preg_match("/a.{1}m/", $string); // true
$result = preg_match("/a.{2}m/", $string); // false     , it has to be exactly 2 words          //adbmin@gmail.com          <-This is the right answer
$result = preg_match("/a.{2,4}m/", $string); // false   , it has to be exactly 2 to 4 words     //adbcdmin@gmail.com        <-This is the right answer
$result = preg_match("/a.{2,}m/", $string); // false    , it can be 2 or more words             //adbcdefgmin@gmail.com     <-This is the right answer

$string = "PHP";
$result = preg_match("/.{2}/", $string); // true

$string = "php";
$result = preg_match("/hp/", $string); // true
$result = preg_match("/p(hp)*/", $string); // true
$result = preg_match("/p(hp)+/", $string); // true      ,false condition = p, pbp pcc p hp

$string = "Vv";
$result = preg_match("/.{2}/", $string); // true
$result = preg_match("/^.{2}$/", $string); // true      ,exactly any 2 characters

$string = "Welcome to our <i>programming class</i>";
$result = preg_match("/<i><\/i>/", $string); // false
$result = preg_match("/<i>\w<\/i>/", $string); // false     ,because it has to be only one character
$result = preg_match("/<i>\w*<\/i>/", $string); // false    ,because it contains space
$result = preg_match("/<i>\w<\/i>/", $string); // false
$result = preg_match("/<i>.<\/i>/", $string); // false
$result = preg_match("/<i>.*<\/i>/", $string); // true
$result = preg_match("/<i>(.*)<\/i>/", $string); // true

$string = "admin@gmail.net";
$result = preg_match("/^[a-z,A-Z]+@[a-z]+\.\w{3}/", $string); // true

//--------------------------------------------------

//preg_replace(pattern,replacement,string)

$string = "Are you ready to learn PHP Framework";
$result = preg_replace("/php/", "javascript", $string); // Are you ready to learn PHP Framework
$result = preg_replace("/php/i", "javascript", $string); // Are you ready to learn javascript Framework
$result = preg_replace("/\s/", "", $string); // AreyoureadytolearnPHPFramework

//--------------------------------------------------

//Bracket Expressions
$string = "admin123@gmail .com";

$result = preg_replace("/[[:space:]]/", "", $string); // admin123@gmail.com
$result = preg_replace("/[[:space:]]/", "x", $string); // admin123@gmailx.com
$result = preg_replace("/[[:alpha:]]/", "x", $string); // xxxxx123@xxxxx .xxx
$result = preg_replace("/[[:digit:]]/", "x", $string); // adminxxx@gmail .com
$result = preg_replace("/[[:alnum:]]/", "x", $string); // xxxxxxxx@xxxxx .xxx
$result = preg_replace("/[[:punct:]]/", "x", $string); // admin123xgmail xcom

#----------

$string = "Admin123@gmail .Com";

$result = preg_replace("/[[:lower:]]/", "x", $string); // Axxxx123@xxxxx .Cxx
$result = preg_replace("/[[:upper:]]/", "x", $string); // xdmin123@gmail .xom

#----------

$string = "Are you ready to learn PHP Framework";
$result = preg_replace(
    ["/PHP/", "/framework/"],
    ["JavaScript", "libraries"],
    $string
); // Are you ready to learn JavaScript Framework
$result = preg_replace(
    ["/PHP/", "/framework/i"],
    ["JavaScript", "libraries"],
    $string
); // Are you ready to learn JavaScript libraries

#----------

$string = "My lucky number is 007 but my ticket number is 5700";

$result = preg_replace("/[0-9]/", "x", $string); // My lucky number is xxx but my ticket number is xxxx
$result = preg_replace("/[0-9]+/", "x", $string); // My lucky number is x but my ticket number is x

echo $result;

//--------------------------------------------------

//                            no limit = 0 (or) NULL
//preg_replace(pattern,string,limit,flags);

$string = "My lucky number is 007";
$result = preg_split("/\s/", $string);
// echo $result; // error , Array to String Conversion
echo "<pre>" . print_r($result, true) . "</pre>";
echo $result[0]; // My
echo $result[4]; // 007

#----------

$result = preg_split("/\s/", $string, 2);
echo "<pre>" . print_r($result, true) . "</pre>";
echo $result[0]; // My
echo $result[1]; // lucky number is 007

#----------

$string = "My lucky number is 007 but my ticket number is 5700";
$result = preg_split("/\s/", $string);
$result = preg_split("/[\s]/", $string);
$result = preg_split("/\s,/", $string); // [0] => My lucky number is 007 but my ticket number is 5700
$result = preg_split("/[\s,]/", $string);

#----------

$result = preg_split("/[\s,]/", $string, null, PREG_SPLIT_NO_EMPTY);
$result = preg_split("/[\s,]/", $string, 0, PREG_SPLIT_NO_EMPTY);
$result = preg_split("//", $string);
$result = preg_split("//", $string, null, PREG_SPLIT_NO_EMPTY);
$result = preg_split("//", $string, 0, PREG_SPLIT_NO_EMPTY);

echo "<pre>" . print_r($result, true) . "</pre>";

//--------------------------------------------------

//preg_quote(string,delimeter);

$string = "He\'s my father, do you know him ?";
$result = preg_quote($string); // He\\'s my father, do you know him \?
$result = preg_quote($string, "o"); // He\\'s my father, d\o y\ou kn\ow him \?

echo $result;

//--------------------------------------------------

//preg_match_all(patter,string,match/return,flags);

$string =
    "Winning numbers are 227-000 & 002-777 , but my ticket numbers are 007-222 & 112233";

preg_match_all("/\d+-\d+/", $string, $result, PREG_SET_ORDER);
preg_match_all("/\d+-\d+/", $string, $result, PREG_PATTERN_ORDER);
// echo $result; // error , Array to String Conversion
echo "<pre>" . print_r($result, true) . "</pre>";

//--------------------------------------------------

// Lookahead & Lookbehind
// (?=) positive lookahead (or) regex lookahead = right hand side
// (?<=) positive lookbehind (or) regex lookbehind = left hand side

// (?!) negative lookahead (or) regex lookahead = right hand side
// (?<!) negative lookbehind (or) regex lookbehind = left hand side

$string = "aungkyaw@cisco.com";
$result = preg_match("/@(?=cisco)/", $string); //true      positive lookahead
$result = preg_match("/(?<=@)cisco/", $string); //true      positive lookbehind

$result = preg_match("/@(?!cisco)/", $string); //false      negative lookahead
$result = preg_match("/(?<!@)cisco/", $string); //false      negative lookbehind

echo $result;
?>

// $            must be in end (case sensitive)
// ^            must be start (case sensitive) , caret or circumflex, shift+6 or cmd+6
// i            no case sensitive
// []           range a-z A-Z 0-9
// m+           must contain at least one m and more
// m*           can contain one m or not and more
// m?           can contain one m or not and more
// m{nth}       contain (same place or couple place) m as per nth and more
// m{nth,nth}   contain some place m as per nth and more
// m{nth,}      contain some place m as per nth and more


// \s           space
// \d           digit
// \D           no digit
// \w           word [a-z] [A-Z] [0-9]
// \W           any special escape character !@#$%^&*


// .            any character
// ()           this
// +            must
// *            can


// p(hp)*       can contain hp
// p(hp)+       must contain hp


// [[:space:]]  space characters
// [[:alpha:]]  alphabetic characters
// [[:digit:]]  digit characters
// [[:alnum:]]  alphanumeric characters
// [[:punct:]]  punctuation characters
// [[:lower:]]  lower-case characters
// [[:upper:]]  upper-case characters
