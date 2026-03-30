<?php

function counter_inscrits() {
    $file = 'inscrits.txt';
    if (!file_exists($file)) {
        return 0;
    }
    $contenu = fgets(fopen($file, 'r'), filesize($file));
    return substr_count($contenu, "\n");
}

if(empty($_POST['nom']) || empty($_POST['email']) || empty($_POST['date_inscription'])) {
    echo "Tous les champs sont obligatoires.";
} else {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $date_inscription = $_POST['date_inscription'];
}


function afficher_inscrits() {
    $file = 'inscrits.txt';
    if (!file_exists($file) || filesize($file) == 0) {
        echo "Aucun inscrit pour l'instant.";
        return;
    }
    $lecture = fopen($file, 'r');
    echo "<table border='1'><tr><th>Prénom</th><th>Email</th><th>Niveau</th><th>Date d'inscription</th></tr>";
    while (($line = fgets($lecture)) !== false) {
        $lignes = explode('|', trim($line));
        echo "<tr>";
        foreach ($lignes as $ligne) {
            echo "<td>" . htmlspecialchars($ligne) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    fclose($lecture);
}

if (isset($_POST['recherche']) && !empty($_POST['recherche'])){
    $recherche = $_POST['recherche'];
    recherche_inscrits($recherche);
}




function recherche_inscrits($recherche){
    $file = 'inscrits.txt';
     $lecture = fopen($file, 'r');

      if (!$recherche) {
            echo "Aucun inscrit ne correspond à votre recherche.";
        }
        
   
    while (!feof($lecture)) {
        $line = fgets($lecture);
        if (strpos($line, $recherche) !== false) {
            echo $line . "<br>";
        }
    }
    fclose($lecture);

}



?>

<form action="admin_inscrits.php" method="post">
    <input type="text" name="recherche" placeholder="Rechercher...">
    <button type="submit">Rechercher</button>
</form>

<form action="inscrits.php" method="post">
    <input type="text" name="nom" placeholder="Nom">
    <input type="email" name="email" placeholder="Email">
    <input type="date" name="date_inscription" placeholder="Date d'inscription">
    <button type="submit">S'inscrire</button>
</form>