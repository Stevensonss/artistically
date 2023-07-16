<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "artistically";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "SELECT * FROM users"; // Spécifiez le nom de la table ici
    $result = $conn->query($query);

    // Parcourir les résultats
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo $row['column_name'];
    }

    $conn = null;
} catch(PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}

?>
