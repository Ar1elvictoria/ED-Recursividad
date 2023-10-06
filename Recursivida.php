<?php
function factorial($n){
    if ($n <= 1){
        return 1;
    }else{
        return $n * factorial($n-1);
    }
}

$numero=10;
$resultado=factorial($numero);
echo "El factorial de $numero es $resultado";
?>