<?php
$temp=100;
if($temp>=40){
    echo "It is too hot outside.\n";
}
elseif($temp>=30 && $temp<40){
    echo "The weather today is normal.\n";
}
elseif($temp>=20 && $temp<30){
    echo "Today's weather is cool.\n";
}
elseif($temp>=10 && $temp<20){
    echo "OMG! Today's weather is so cool.\n";
}
else{
    echo "It is super cold today.\n";
}
?>