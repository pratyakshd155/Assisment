<?php 

$ele = array();
$count = 0;

// $a = (int)readline('Enter no of elements in array you want: ');
// $a = readline('Enter no of elements in array you want: ');
for ($i=0; $i >-1 ; $i++) {

    
    // $temp = (int)readline('Enter array value: ');
    $temp = readline('Enter array value: ');
    if($temp == "exit"){
        break;
    }
    else{ 
        // $ele[$i] = $temp;
        array_push($ele , $temp);
        $count++;
    }
    
    // array_push($ele , $temp);
    // $ele[$i] = $temp;
}

print_r($ele);
// $sum = array_sum($ele);
// print_r($sum);
print_r($count);


?>