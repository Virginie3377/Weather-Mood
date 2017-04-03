

    <?php

    $morceauListe=accedeDeezer($temp_type);

    function accedeDeezer($param){

        if (strpos($param,"sun")==true){
            $ciel="sun";
        } else {
            if (strpos($param,"rain")==true){
                $ciel="rain";
            } else {
                $ciel="sun";
            }
        }

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'http://api.deezer.com/search/track?q=' . $ciel,

            CURLOPT_USERAGENT => 'Codular Sample cURL Request'
        ));
        $return = curl_exec($curl);
        curl_close($curl);

        $json_data=json_decode($return,true);

        foreach ($json_data as $cle => $ligne) {
            foreach ($ligne as $cle2 => $ligne2) {
                foreach ($ligne2 as $cle3 => $ligne3) {
                    if ($cle3=='id'){
                        if ($liste==""){
                            $liste=$ligne3;
                            $titre=$json_data[cle][cle2]['title'];
                        } else {
                            $liste=$liste.",".$ligne3;
                        }
                    }
                    if ($cle3=='title'){
                        if ($titre==""){
                            $titre=$ligne3;
                        } else {
                            $titre=$titre.",".$ligne3;
                        }
                    }


                }
            }
        }

        $morceauTitre=explode(",",$titre);
        $morceauListe=explode(",",$liste);

        $nb=count($morceauTitre);
        $nb2=rand(0,$nb);
        $morceauListe=$morceauListe[$nb2];


    return $morceauListe;

    }





