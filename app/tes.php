<!-- Belajar switch case -->

<?php

    // function tes($value, $type = null){
    //     if (is_null($type)) {
    //         switch (true){ 
    //             case is_int($value) :
    //                 echo "ini Int";
    //                 break;
    //             case is_bool($value) : 
    //                 echo "ini bool";
    //                 break;
    //             case is_null($value) :
    //                 echo "ini null";
    //                 break;
    //             default :
    //              echo "ini default";
    //         }
    //     }
    // }

    // tes(1);

    $nilai = "aa";
    switch($nilai){
        case 70:
            echo "Nilai 80";
        break;
        default:
        echo "tidak dikenali";
        break;
    }