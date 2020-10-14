<?php

    function missINT($arr){
        
        $temp = array();
        for ($i=0; $i <count($arr); $i++) { 
            if ($i==0) {
                $temp[$i]=$arr[$i];
            }elseif($arr[$i]==$arr[$i-1]+1){             //cek urutan
                array_push($temp, $arr[$i]);
            }else {
                for($j=1;$j<=$arr[$i]-$arr[$i-1];$j++){  //insert sebanyak nilai yang hilang
                    array_push($temp, $arr[$i-1]+$j);
                }
            }
        }
        return $temp;
    }

    $arr = array(1,2,3,4,6,10,12,13,14,15,16,19,20);
    $temp = missINT($arr);

    for ($i=0; $i < count($temp); $i++) { 
        echo $temp[$i].", ";
    }

?>