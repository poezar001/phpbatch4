<?php
date_default_timezone_set("Asia/Yangon");

$getdate = getdate();
$getyear = $getdate["year"];
// echo $getyear;

$getwday = $getdate["wday"];

// echo $getwday; // 2
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Working with HTML</title>
    </head>

    <body>
        <h1>Welcome to PHP Class</h1>

<?php
$time = time();
$hours = date("H", $time); // date("G",$time)
echo $hours;

if ($hours < 12) {
    echo " Good Morning ";
} elseif ($hours < 18) {
    echo " Good Afternoon ";
} elseif ($hours < 22) {
    echo " Good Evening ";
} else {
    echo " Good Night ";
}
?>

 <?php if ($getwday === 0) {
     echo "Today is Sunday";
 } elseif ($getwday === 1) {
     echo "Today is Monday";
 } elseif ($getwday === 2) {
     echo "Today is Tuesday";
 } elseif ($getwday === 3) {
     echo "Today is Wednesday";
 } elseif ($getwday === 4) {
     echo "Today is Thursday";
 } elseif ($getwday === 5) {
     echo "Today is Friday";
 } elseif ($getwday === 6) {
     echo "Today is Saturday";
 } ?>

<?php if ($getwday === 0): ?>
    <p>Today is Sunday.</p>
<?php elseif ($getwday === 1): ?>
    <p>Today is Monday.</p>
<?php elseif ($getwday === 2): ?>
    <p>Today is Tuesday.</p>
<?php elseif ($getwday === 3): ?>
    <p>Today is Wednesday.</p>
<?php elseif ($getwday === 4): ?>
    <p>Today is Thursday.</p>
<?php elseif ($getwday === 5): ?>
    <p>Today is Friday.</p>
<?php else: ?>
    <p>Today is Saturday.</p>
<?php endif; ?>

    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </body>
</html>
