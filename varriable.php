<?php
$name ="arnob"; //string
$age = 22; //number
$height = 5.7; //float
$girlFriend = array ('shaila', 'nishi', 'erina'); 
$single = false;

$info = $name. " ". "his age is" . " ".$age;

echo  $info;

if($single < 1 ) {
    print $info . " " . "and he is" . $height. " " . "he's". " " . " gf maybe anyone of them". " " .implode(", ", $girlFriend);
}

?>

<!-- using implode u can print an array one by one esily u can use this echo of print  -->