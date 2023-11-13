<!DOCTYPE html>
<html>
<head>
    <title>Liste des disques</title>
</head>
<body>
    <h1>Liste des disques</h1>
    <a href="record.sql">Ajouter un disque</a>

    <table>
        <tr>
            <th>Titre</th>
            <th>Artiste</th>
            <th>Année</th>
            <th>Action</th>
        </tr>

        <?php
        $connexion = mysqli_connect("localhost", "admin", "Afpa1234", "record");

        if (!$connexion) {
            die("La connexion à la base de données a échoué : " . mysqli_connect_error());
        }

        $requete = "SELECT d.disc_title, a.artist_name, d.disc_year FROM disc d JOIN artist a ON d.artist_id = a.artist_id";
        $resultat = mysqli_query($connexion, $requete);

        if ($resultat) {
            while ($ligne = mysqli_fetch_assoc($resultat)) {
                echo "<tr>";
                echo "<td>" . $ligne['disc_picture'] . "</td>";
                echo "<td>" . $ligne['disc_title'] . "</td>";
                echo "<td>" . $ligne['artist_name'] . "</td>";
                echo "<td>" . $ligne['disc_year'] . "</td>";
                echo "<td><a href='details_disc.php?id=" . $ligne['id'] . "'>Détails</a></td>";
                echo "</tr>";
            }

            mysqli_free_result($resultat);
        } else {
            echo "Erreur de la récupération des données : " . mysqli_error($connexion);
        }

        mysqli_close($connexion);
        ?>
    </table>
</body>
</html>
