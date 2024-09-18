<?php
        echo "BEM-VINDO";

    echo "<hr>";

    for ($i = 1;$i<=10;$i++) {

        if($i % 2 == 0){
            echo $i . "<br>";
        }else{
            echo "IMPAR <br>";
        }
    }
    echo "<hr>";

    $a = 1;
    while($a<=10){
        echo $a . "<br>";
        $a = $a + 1;
    }

?>