<?php

function numToWords($num) {

    $angka = array('0','0','0','0','0','0','0','0','0','0',
                   '0','0','0','0','0','0');
    $kata = array('','satu','dua','tiga','empat','lima',
                  'enam','tujuh','delapan','sembilan');
    $tingkat = array('','ribu','juta','milyar','triliun');
  
    $panjang_num = strlen($num);
  
    if ($panjang_num > 15) {
      $string = "Diluar Batas";
      return $string;
    }
  
    for ($i = 1; $i <= $panjang_num; $i++) {
      $angka[$i] = substr($num,-($i),1);
    }
  
    $i = 1;
    $j = 0;
    $string = "";
  
    while ($i <= $panjang_num) {
  
      $substring = "";
      $kata1 = "";
      $kata2 = "";
      $kata3 = "";
  
      if ($angka[$i+2] != "0") {
        if ($angka[$i+2] == "1") {
          $kata1 = "seratus";
        } else {
          $kata1 = $kata[$angka[$i+2]] . " ratus";
        }
      }
  
      
      if ($angka[$i+1] != "0") {
        if ($angka[$i+1] == "1") {
          if ($angka[$i] == "0") {
            $kata2 = "sepuluh";
          } elseif ($angka[$i] == "1") {
            $kata2 = "sebelas";
          } else {
            $kata2 = $kata[$angka[$i]] . " belas";
          }
        } else {
          $kata2 = $kata[$angka[$i+1]] . " puluh";
        }
      }
  
      if ($angka[$i] != "0") {
        if ($angka[$i+1] != "1") {
          $kata3 = $kata[$angka[$i]];
        }
      }
  
      if (($angka[$i] != "0") OR ($angka[$i+1] != "0") OR
          ($angka[$i+2] != "0")) {
        $substring = "$kata1 $kata2 $kata3 " . $tingkat[$j] . " ";
      }
  
      $string = $substring . $string;
      $i = $i + 3;
      $j = $j + 1;
  
    }
  
    if (($angka[5] == "0") AND ($angka[6] == "0")) {
      $string = str_replace("satu ribu","seribu",$string);
    }
  
    return trim($string);
  
  } 

    echo numToWords(123456789);
?>