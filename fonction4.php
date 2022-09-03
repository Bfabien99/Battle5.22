<?php
    function domine(string $value){
        // while(gettype($value != 'string')){
        //     $value = 
        // }
        $message = "";
        $alphabet = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
        $conson = ['b','c','d','f','g','h','j','k','l','m','n','p','q','r','s','t','v','w','x','z'];
        $voy = ['a','e','i','o','u','y',];
        $count_voy = 0;
        $count_conson =0;

        $r_value = strrev($value);

        for ($i=0; $i < strlen($r_value) ; $i++) { 
            if(in_array($r_value[$i],$conson)){
                $count_conson += array_search($r_value[$i],$alphabet) + 1; 
            }elseif(in_array($r_value[$i],$voy)){
                $count_voy += array_search($r_value[$i],$alphabet) + 1; 
            }
        }

        if($count_voy < $count_conson){
            $message = "consonne";
        }elseif($count_voy > $count_conson){
            $message = "voyelle";
        }else{
            $message = "égaux";
        }

        return "$r_value, $count_conson, $count_voy,  $message".PHP_EOL;
    }

    echo domine('baba');
?>