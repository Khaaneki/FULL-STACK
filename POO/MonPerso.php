<?php
include 'classes/Personnage.class.php';

function displayCharacter($character) {
    echo 'Nom : ' . $character->getNom() . '<br>';
    echo 'Prénom : ' . $character->getPrenom() . '<br>';
    echo 'Sexe : ' . $character->getSexe() . '<br>';
    echo 'Age : ' . $character->getAge() . '<br><br>';
}

function displayEmployee($employee) {
    $output .= '<hr><hr><br>Nom : ' . $employee->getNom() . '<br>';
    $output .= 'Prénom : ' . $employee->getPrenom() . '<br>';
    $output .= 'Date d\'embauche : ' . $employee->getDate()->format('d/m/Y') . '<br>';
    $output .= 'Nombre d\'année passée dans l\'entreprise : ' . $employee->Anciennete() . ' ans <br>';
    $output .= 'Prime : ' . $employee->Prime($employee->getSalaire(), $employee->Anciennete()) . ' <br>';
    $output .= 'Fonction: ' . $employee->getFonction() . '<br>';
    $output .= 'Salaire : '. $employee->getSalaire() . ' € <br>';
    $output .= 'Service : ' . $employee->getService() . '<br>';
    
    if ($employee->getMagasin() != NULL) {
        $output .= 'Nom de l\'entreprise : ' . $employee->getMagasin()->getNom() .'<br>';
        $output .= 'Adresse : ' . $employee->getMagasin()->getAdresse() . '<br>';
        $output .= 'Code postal :' . $employee->getMagasin()->getCodePostal() .'<br>';
        $output .= 'Ville :' . $employee->getMagasin()->getVille() . '<br>';
        $output .= 'Mode de restauration : ' . $employee->getMagasin()->Ticket($employee->getMagasin()->getRestaurant()) . '<br>';
        $output .= 'Bénéficie du chèque de noel : ' . $employee->droitCheque($employee->getEnfants()) . '<br>';
        
        if ($employee->droitCheque($employee->getEnfants()) == 'Oui') {
            $output .= 'Montant du chèque de noel : ' . $employee->montantCheque($employee->getEnfants()) . '€<br>';
            $output .= 'Détail du chèque de noel: ' . $employee->detailCheque($employee->getEnfants()) . ' €<br><br>';
        } else {
            $output .= '<br>';
        }
    } else {
        $output .= '<br>';
    }
    return $output;
}

$character = new Personnage();
$character->setNom("Lebowski");
$character->setPrenom("Jeff");
$character->setSexe("Masculin");
$character->setAge(34);

displayCharacter($character);
echo 'Liste des employées : <br>';

$employee0 = new Employe();
$employee0->setNom("jean");
$employee0->setPrenom("jacque");
$employee0->setDate("2020-08-15");
$employee0->setFonction("Comptable");
$employee0->setSalaire(3000);
$employee0->setService('Agent de sécurité');
$employee0->setEnfants([13, 8, 26]);
$employee0->setMagasin(new Magasin("intraz", "4 rue de la cote d'azur", "80000", "Amiens", 0));

$employee1 = new Employe();
$employee1->setNom("maillard");
$employee1->setPrenom("inès");
$employee1->setDate("2004-07-26");
$employee1->setFonction("Conseillère d'orientation");
$employee1->setSalaire(1500);
$employee1->setService("Agent d'entretient");
$employee1->setEnfants([3, 16, 19]);
$employee1->setMagasin(new Magasin("placardo", "56 ru de la montagne", "80000", "Amiens", 1));

$employee2 = new Employe();
$employee2->setNom("jesaispas");
$employee2->setPrenom("camille");
$employee2->setDate("2021-12-12");
$employee2->setFonction("Agent de soin");
$employee2->setSalaire(0.10);
$employee2->setService("Vente");
$employee2->setEnfants([38, 23, 8, 9]);
$employee2->setMagasin(new Magasin("mx-arena", "30 Rue de Poulainville", "80000", "Amiens", 1));

$employee3 = new Employe();
$employee3->setNom("michon");
$employee3->setPrenom("bernard");
$employee3->setDate("1996-04-13");
$employee3->setFonction("restauration rapide");
$employee3->setSalaire(4000);
$employee3->setService("cuisine");
$employee3->setEnfants([4, 2, 20, 14, 1, 6, 22, 9]);
$employee3->setMagasin(new Magasin("jarditou", "24 rue de la forêt", "80000", "Amiens", 0));

$employee4 = new Employe();
$employee4->setNom("bilief");
$employee4->setPrenom("reda");
$employee4->setDate("1986-03-23");
$employee4->setFonction("gratteur");
$employee4->setSalaire(5000);
$employee4->setService("mécanique");
$employee4->setEnfants([7, 13, 11, 22, 17]);
$employee4->setMagasin(new Magasin("hess auto", "8 avenue de picardie", "80000", "Amiens", 0));

$employee5 = new Employe();
$employee5->setNom("delafosse");
$employee5->setPrenom("erwan");
$employee5->setDate("2018-06-16");
$employee5->setFonction("michto");
$employee5->setSalaire(700);
$employee5->setService("serveur");
$employee5->setEnfants([34, 28, 31]);
$employee5->setMagasin(new Magasin("mortadella", "64 rue de la montre", "80000", "Amiens", 1));

for ($i = 0; $i <= 5; $i++) {
    $employee = 'employee'.$i;
    echo displayEmployee(${$employee});
}
?>