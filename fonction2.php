<?php
function premier(int $nombre){
    $nrb_diviseur = 0;
    //$diviseur = '';
    $premier = '';
    if($nombre < 2){
        return "$nombre, '1'";
    }else{
        $range = range(0,$nombre);
        for ($i=0; $i < count($range) ; $i++) { 
            
        }
    }

    return "$premier , $nrb_diviseur";
}

echo premier(10);
?>