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

    $string = 'Kucing makan makan tikus sambil di kejar kejar anjing anjing ';
    $data   = preg_split('/\s+/', $string); 

    $dups = getDuplucate($data);
    
    for ($i=0; $i < count($dups); $i++) { 
        echo $dups[$i].", ";
    }

?>