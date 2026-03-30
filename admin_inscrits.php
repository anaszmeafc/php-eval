<?php

// Partie A - Affichage de la liste des inscrits

$fichier = fopen("inscrits.txt", "r");
    if (($tailleFichier = (filesize("inscrits.txt"))) == 0) echo 'Aucun inscrit pour l\'instant';
    else {
        $contenu = fread($fichier, $tailleFichier);
        $nbInscrits = substr_count($contenu, '\n');
        echo 'Nombre total d\'inscrits : ' . $nbInscrits;
        fclose($fichier);
    $fichier = fopen("inscrits.txt", "r");
    $tableau = [];
    while (!feof($fichier)) {
        $ligne = fgets($fichier);
        explode('|', $ligne);
        array_push ($tableau, $ligne);
    }
    $ligneHTML = "";
    for($i=0;$i<count($tableau); $i++) {
        $ligneHTML = $ligneHTML . '<tr><td>' . $tableau[$i] . '</td><td>' . $tableau[$i] . '</td><td>' . $tableau[$i] . '</td><td>' . $tableau[$i];
    }
    $tableauHTML = '<table><tr><th>Prénom</th><th>Email</th><th>Niveau</th><th>Date d\'inscription</th></tr></table>' . $ligneHTML;
    echo $tableauHTML;
    }
?>

