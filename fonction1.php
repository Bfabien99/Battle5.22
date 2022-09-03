<?php
// REMPLACER LES VALEURS INCONNUES PAR ZERO
    function pythagore($AB = null, $BC = null, $AC = null){
        if($AB != null && $BC != null && $AC != null){
            if($AC != (($AB**2) + ($BC**2))){
                        return 'Les valeurs ne sont pas correctes';
                    }else{
                        return "AC = ".sqrt($AC)."AB = ".sqrt($AB)."BC = ".sqrt($BC);
                    }
        }else{
            if($AB != null && $BC != null){
                $AC = (($AB**2) + ($BC**2));
                return "AC = ".sqrt($AC);
            }elseif($AB != null && $AC != null){
                $BC = ($AC**2) - ($AB**2);
                return "BC = ".sqrt($BC);
            }
            elseif($BC != null && $AC != null){
                $AB = ($AC**2) - ($BC**2);
                return "AB = ".sqrt($AB);
            }else{
                return "0";
            }
        }
    }

    echo pythagore(8,6,0);
