<?php
function premier(int $nombre){
    $nrb_diviseur = 0;
    //$diviseur = '';
    $premier = '';
    if($nombre < 2){
        return "$nombre, '1'";
    }elseif($nombre > 2){
        $range = range(0,$nombre);
        for ($i=0; $i < count($range) ; $i++) { 
            if($range[$i] % 2 != 0){

            }
        }
    }elseif($nombre > 3){
        $range = range(0,$nombre);
        for ($i=0; $i < count($range) ; $i++) { 
            if($range[$i] % 2 != 0){

            }
        }
    }elseif($nombre > 5){
        $range = range(0,$nombre);
        for ($i=0; $i < count($range) ; $i++) { 
            if($range[$i] % 2 != 0){

            }
        }
    }elseif($nombre > 7){
        $range = range(0,$nombre);
        for ($i=0; $i < count($range) ; $i++) { 
            if($range[$i] % 2 != 0){

            }
        }
    }

    return "$premier , $nrb_diviseur";
}

echo premier(10);
?>