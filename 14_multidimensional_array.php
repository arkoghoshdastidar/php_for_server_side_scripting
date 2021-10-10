<?php declare(strict_types=1);
/*
MULTIDIMENSIONAL ARRAYS 
*/


/*3D_ARRAY*/
$array3_D=array(
                    array
                    (
                          array("Volvo",22,18),
                          array("BMW",15,13),
                          array("Saab",5,2)
                    ),
                    array
                    (
                          array("Ferrarri",18,33),
                          array("Bugatti",2,1),
                          array("Lemborgini",1,1)
                    ),
                    array
                    (
                          array("Hayabusa",21,20),
                          array("Kawasaki",10,12),
                          array("BMW",8,13)
                    )
);
for($i=0;$i<3;$i++){
    for($j=0;$j<3;$j++){
        for($k=0;$k<3;$k++){
            echo $array3_D[$i][$j][$k]."  ";
        }
        echo "<br>";
    }
    echo "<br><hr>";
}
?>