<?php

// $i = 1;

// if ($i%3==0 && $i%2!=0) {
//     echo "Go";
// } elseif ($i%5==0 && $i%4!=0) {
//     echo "Training";
//     if ($i%15==0 && $i%14!=0) {
//         echo "Go Training";
//     }
// }

for ($i=1; $i < 101; $i++) { 
    echo $i;
    if ($i%3==0) {
        echo "Go";
        if ($i%5==0) {
            echo "Training";
        }
    } elseif ($i%5==0) {
        echo "Training";
    }
    echo "<br />";
}

// while ($x <= 100) {
//     if ($x % 3 != 0 && $x % 5 != 0 && $x % 15 != 0) {
//         echo $x;
//     } elseif (is_int($x/3)) {
//         echo "Go";
//     } elseif (is_int($x/5)) {
//         echo "Training";
//     } elseif (is_int(!$x/15)) {
//         echo "Go Training";
//     }
//     echo "<br />";
//     $x++;
// }

// for($i=1; $i<=100; $i++) {
//     echo $i;
//     if(is_int($i/3)) {
//         echo "Go";
//     } elseif(is_int($i/5)) {
//         echo "Training";
//     } elseif(is_int($i/15)) {
//         echo "Go Training";
//     }
// echo "<br />";
// }

?>