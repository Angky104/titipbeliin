<?php

    function removeDups($arr){
        $dups = getDuplucate($arr);
        $key = array();

        for ($i=0; $i < count($dups); $i++) { 
            for ($j=0; $j < count($arr); $j++) { 
                if ($arr[$j]==$dups[$i]) {
                    array_push($key,$j);
                }
            }
        }
        rsort($key);

        for ($j=count($key)-1; $j >= 0; $j--) { 
            unset($arr[$key[$j]]);
        }

        return array_values($arr);
    }

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
    $temp = removeDups($arr);

    for ($i=0; $i < count($temp); $i++) { 
        echo $temp[$i].", ";
    }
?>