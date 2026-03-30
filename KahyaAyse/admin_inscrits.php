<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="admin_inscrits.php" method="POST">
        Rechercher un inscrit
        <input type="text" name="recherche">
        <button type="submit">Rechercher</button>
    </form>
</body>
</html>

<?php
if (!empty($_POST["recherche"])) {

    $recherche = $_POST["recherche"];

    if (!file_exists("inscrits.txt")) {
        echo "Aucun inscrit pour l'instant";
    } else {
        $fichier = fopen("inscrits.txt", "r");
        $resultats = [];

        while ($ligne = fgets($fichier)) {
            if (stristr($ligne, $recherche) !== false) {
                $resultats[] = explode(" | ", trim($ligne));
            }
        }
        fclose($fichier);

        if (empty($resultats)) {
            echo "Aucun inscrit ne correspond à votre recherche.";
        } else {
            echo "<table>";
            echo "<tr>";
            echo "<th>Prenom</th>";
            echo "<th>Email</th>";
            echo "<th>Niveau</th>";
            echo "<th>Date</th>";
            echo "</tr>";

            foreach ($resultats as $info) {
                $prenom = $info[0];
                $email  = $info[1];
                $niveau = $info[2];
                $date  = $info[3];
                echo "<tr>";
                echo "<td>$prenom</td>";
                echo "<td>$email</td>";
                echo "<td>$niveau</td>";
                echo "<td>$date</td>";
                echo "</tr>";
}
            echo "</table>";
        }
    }

} else {

    if (!file_exists("inscrits.txt")){
        echo "Aucun inscrit pour l'instant";
    } else {
        $fichier = fopen("inscrits.txt", "r");
        $contenu = fread($fichier, filesize("inscrits.txt"));

        $nombre_inscrits = substr_count(trim($contenu), "\n") + 1;
        echo "Nombre total d'inscrits $nombre_inscrits";

        rewind($fichier);

        $tab = [];
        while ($ligne = fgets($fichier)) {
            $tab[] = explode(" | ", trim($ligne));
        }
        fclose($fichier);

        echo "<table>";
        echo "<tr>";
        echo "<th>Prenom</th>";
        echo "<th>Email</th>";
        echo "<th>Niveau</th>";
        echo "<th>Date</th>";
        echo "</tr>";

        foreach ($tab as $info) {
                $prenom = $info[0];
                $email  = $info[1];
                $niveau = $info[2];
                $date  = $info[3];
                echo "<tr>";
                echo "<td>$prenom</td>";
                echo "<td>$email</td>";
                echo "<td>$niveau</td>";
                echo "<td>$date</td>";
                echo "</tr>";
    }
}}
?>