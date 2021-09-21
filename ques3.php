<?php

$str = "i am a string";
$a = array();

for ($i=0; $i < strlen($str); $i++) { 
    $count = 1;
    $curr = $str[$i];
    if(in_array($curr ,$a)){

        continue;
    }
    else{
        array_push($a ,$curr);
        for ($j=0; $j < strlen($str); $j++) { 
            if($i == $j){
                continue;
            }
            elseif($curr ==  $str[$j]){
                $count++;
            }
        }
    }
    print_r("Count of  ".$curr." => ".$count);
    echo "\n";
}



?>