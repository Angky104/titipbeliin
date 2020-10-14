<?php

    function getDuplucate($arr){
        $temp = array();
        foreach(array_count_values($arr) as $val => $c){ 
            if($c > 1){ 
                $temp[] = $val;
            }
        }
        return $temp;
    }

    $arr = array(10,22,89,88,65,22,10,77,88,8,6,2,4,12,3,4,4,2,1,2,3);
    $dups = getDuplucate($arr);

    for ($i=0; $i < count($dups); $i++) { 
        echo $dups[$i].", ";
    }

?>