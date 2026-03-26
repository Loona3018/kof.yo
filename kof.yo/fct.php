<?php 


Function Formatnbr($a) {
    $format = number_format($a, 0, '', ' ');
    echo $format;
}

Function Token($namefile) {
    # vérifie si le fichier text existe
    if (file_exists($namefile)) {
        # Ourvre le fichier text ou il y a le token
        $a = fopen("$namefile", "r");
        
        # Récupere la première ligne ou il y a le token
        while ($b = fgets($a)) {
            $Token = $b;
        }
    } else {
        # Si le fichier n'existe pas token vide
        $Token = "";
    }

    return $Token;
}