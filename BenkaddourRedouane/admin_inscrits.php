// partie A

<?php
$fichier_nom = "inscrits.txt";

if(!file_exists($fichier_nom) || filesize($fichier_nom) == 0) {
    echo "Aucun inscrit pour l'instant.";
} else {
    $fichier = fopen($fichier_nom, "r");
    $contenu = fread($fichier, filesize($fichier_nom));
    fclose($fichier);

    $nb = substr_count($contenu, "\n");
    
    $fichier = fopen($fichier_nom, "r");
    
       echo "<table>";

    
    while($ligne = fgets($fichier)) {

        $infos = explode("|", $ligne);

        echo "<tr>";
        echo "<td>" . $infos[0] . "</td>";
        echo "<td>" . $infos[1] . "</td>";
        echo "<td>" . $infos[2] . "</td>";
        echo "<td>" . $infos[3] . "</td>";
        echo "</tr>";
    }

    echo "</table>";

    fclose($fichier);
}
?>


// Partie B