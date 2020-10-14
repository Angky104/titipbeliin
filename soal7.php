<?php

    function reverse($string){
        $data   = preg_split('/\s+/', $string); 
        $temp = array();
        $hasil="";
        $j=0;
        for ($i=count($data)-1; $i >= 0 ; $i--) { 
            $temp[$j]=$data[$i];
            $j++;
        }

        for ($i=0; $i < count($temp); $i++) { 
            $hasil .= $temp[$i]." ";
        }

        return $hasil;
    }

    $string = 'Kucing makan tikus';
    $hasil = reverse($string);

    echo $hasil;
?>