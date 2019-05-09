<?php
/* $num = 7;
if ($num ==6) {
    echo '6 passed';
} elseif ($num==7) {
    echo '7 passed';
}
else {
  echo 'did not pass';
}*/
$num = 6;
/*if ($num>5) {
   if($num<10);
   echo "$num passed";
}
*/
/*if ($num>5 && $num<10) {
    echo "$num passed";
}
*/
/*if ($num >6 XOR $num<10) {
echo "$num passed";
}
*/

//switch
$favColor = 'green';
switch ($favColor) {
    case 'red':
   echo "Your favourtie color is $favColor";
        break;
    case 'green':
    echo "Your favourtie color is $favColor";
        break;
    
    default:
       echo "Your favourite color is somethig else";
        break;
}
?>