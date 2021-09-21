<?php



//*****WITH PRE DEFINED FUNTIONS */
$ele = array(3,8,9,3,1,7,2,8);
$sorted = array();

for ($i=0; $i < 100 ; $i++) { 
    
    if(in_array($i , $ele)){
        array_push($sorted , $j);
        } 
}
print_r($sorted);



// ***** WITH SELF MADE FUNCTION*********

// $ele = array(3,8,9,3,1,7,2,8);
// $sorted = array();
// for ($i=0; $i < count($ele) ; $i++) { 
//     for ($j=0; $j <100 ; $j++) { 
//         if($ele[$i] == $j)){
//             array_push($sorted , $j);
//             }
//     }
// }
// print_r($sorted);


?>