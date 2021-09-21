<?php

$str = array(1,4,8,9,2,5,7,-1,-7,17);


for ($i=0; $i < count($str); $i++) { 
  
    $curr = $str[$i];
    
        for ($j=0; $j < count($str); $j++) { 
            if($i == $j){
                continue;
            }
            elseif($curr + $str[$j] == 10){
                print_r("[".$curr.",".$str[$j]."]" );
                echo "\n";
            }  
        }
}

?>
  