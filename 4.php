<?php
$result = 0;
$num = [1,1,2,3,3,3,4,4,5,5,5];
$i = 0;
$s = $i +1;
$num2 = $num[$s];
while($i <= count($num)){
    if($num[$s] == null){
        break;
    }else{
    if(count($num)-1 >= $num2){
        $flag = false;
    while($flag == false){
    if($num[$i] == $num2){
        $result += 1;
        $i++;
        $s = $i +1;
        $num2 = $num[$s];
    }else{
        $flag = true;
        $i++;
        $s = $i +1;
        $num2 = $num[$s];
    }
}
}
}
}
print_r($num);
echo '<br>'.$result;