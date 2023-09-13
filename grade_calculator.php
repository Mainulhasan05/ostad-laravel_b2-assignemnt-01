<?php
$sub1=80;
$sub2=70;
$sub3=90;

$total=$sub1+$sub2+$sub3;
$average=$total/3;
echo "Total Marks Obtained: ".$total."\n";
echo "Average Score: ".$average."\n";
if($average>=90){
    echo "Grade: A+\n";
}
elseif($average>=80 && $average<90){
    echo "Grade: A\n";
}
elseif($average>=70 && $average<80){
    echo "Grade: B\n";
}
elseif($average>=60 && $average<70){
    echo "Grade: C\n";
}
else{
    echo "Grade: F\n";
}
?>
