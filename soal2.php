<?php

    function getEleven($arr){
        
        $temp = array();
        for ($i=0; $i <count($arr); $i++) { 
            for ($j=$i; $j < count($arr); $j++) { 
                if($arr[$j]+$arr[$i]==11&&$i!=$j){
                    array_push($temp,"[".$arr[$i].",".$arr[$j]."]"); 
                }
            }
        }
        return $temp;
    }

    $arr = array(1,2,4,5,7,8,9,10);
    $temp = getEleven($arr);

    for ($i=0; $i < count($temp); $i++) { 
        echo $temp[$i];
    }

?>