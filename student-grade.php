<?php
$grade = "10
";
if (!is_numeric($grade))
{
    echo 'invalid data baby';
}


else {
    $grade = (int)$grade ;

    if ($grade >= 90) {
    echo "A+";
}

elseif ($grade >= 80){
    echo "A";
}
elseif ($grade >= 70){
    echo "B";
}
elseif ($grade >= 60){
    echo "B-";
}
elseif ($grade >= 50){
    echo "C";
}
elseif ($grade >= 40){
    echo "D";
}
elseif ($grade < 33){
    echo "fail";
}

else {
    echo "your Grade in't valid";
}

}










?>