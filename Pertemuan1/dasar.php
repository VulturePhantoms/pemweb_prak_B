<?php

     //  echo "Hello World!";
    $str_satu = "Pemrograman";
     $str_dua = "Website";

     echo $str_satu . " " . $str_dua;



$array = ['Pemrograman', 'Website', 'Kelas B', 'Semester 4'];



     var_dump($array);
     echo $array;
     foreach ($array as $value) {
     echo $value . " ";
    }
     echo '<br>';
     for ($i = 0; $i < count($array); $i++) {
         echo $array[$i] . " ";
    }