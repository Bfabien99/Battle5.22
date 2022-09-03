<?php
    function compare(array $array){
        $positif = [];
        $negatif = [];
        foreach ($array as $nombre) {
            if($nombre <= 0){
                $negatif[] = $nombre;
            }else{
                $positif[] = $nombre;
            }
        }

        if((array_sum($negatif) + array_sum($positif) < 0)){
            $message = 'négatif';
        }elseif((array_sum($negatif) + array_sum($positif) > 0)){
            $message = 'positif';
        }else{
            $message = 'égaux';
        }

        return array_sum($positif)." et ".array_sum($negatif).", $message";
    }

    echo compare([7,-9,6,2,-8]);
?>