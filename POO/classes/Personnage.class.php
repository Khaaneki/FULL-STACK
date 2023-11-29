<?php

class Personnage
{
    private $_nom;
    private $_prenom;
    private $_age;
    private $_sexe;

    public function setNom($sNom)
    {
        $this->_nom = $sNom;
    }

    public function setPrenom($sPrenom)
    {
        $this->_prenom = $sPrenom;
    }

    public function setSexe($sSexe)
    {
        $this->_sexe = $sSexe;
    }

    public function setAge($sAge)
    {
        $this->_age = $sAge;
    }

    public function getNom()
    {
        return $this->_nom;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function getAge()
    {
        return $this->_age;
    }

    public function getSexe()
    {
        return $this->_sexe;
    }
}

class Employe
{
    private $_nom;
    private $_prenom;
    private $_date_embauche;
    private $_fonction;
    private $_salaire;
    private $_service;
    private $_magasin;
    private $_enfants;

    public function setNom($sNom)
    {
        $this->_nom = $sNom;
    }

    public function setPrenom($sPrenom)
    {
        $this->_prenom = $sPrenom;
    }

    public function setDate($sDate_Embauche)
    {
        $this->_date_embauche = new DateTimeImmutable($sDate_Embauche);
    }

    public function setFonction($sFonction)
    {
        $this->_fonction = $sFonction;
    }

    public function setSalaire($sSalaire)
    {
        $this->_salaire = $sSalaire;
    }

    public function setService($sService)
    {
        $this->_service = $sService;
    }

    public function setMagasin($sMagasin)
    {
        $this->_magasin = new Magasin($sMagasin);
    }

    public function setEnfants($sEnfants)
    {
        $this->_enfants = $sEnfants;
    }

    public function getMagasin()
    {
        return $this->_magasin;
    }

    public function getNom()
    {
        return $this->_nom;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function getDate()
    {
        return $this->_date_embauche;
    }

    public function getFonction()
    {
        return $this->_fonction;
    }

    public function getSalaire()
    {
        return $this->_salaire;
    }

    public function getService()
    {
        return $this->_service;
    }

    public function getEnfants()
    {
        return $this->_enfants;
    }

    public function Anciennete()
    {
        $dateActuelle = new DateTimeImmutable();
        $anciennete = date_diff($this->_date_embauche, $dateActuelle);
        return $anciennete->y;
    }

    public function transfertBanque($date)
    {
        if ($date == '30-11') {
            $texte = 'La banque a été contactée, le transfert est effectué.';
            return $texte;
        } else {
            $texte = 'Nous ne sommes pas le 30 Novembre, la banque n\'a pas été contactée';
            return $texte;
        }
    }

    public function Prime($salaire, $annee)
    {
        if ($annee == 'ERREUR || date d\'embauche invalide') {
            return 'saisie invalide || pas de prime';
        } else {
            $jourActuel = new DateTime();
            $jourBanque = $jourActuel->format('d-m');

            if ($annee > 0) {
                $coef = $annee * 0.02 + 0.05;
                $prime = $salaire * $coef;
                $transfert = $this->transfertBanque($jourBanque);
                $concat = $prime . '€ ' . $transfert;
                return $concat;
            } else {
                $prime = $salaire * 0.05;
                $transfert = $this->transfertBanque($jourBanque);
                $concat = $prime . '€ ' . $transfert;
                return $concat;
            }
        }
    }
function chequeNoel($tableau)
{
   $cheque=0;
   $trace='';
foreach ($tableau as $enfants)
{
   if (($enfants>0)&&($enfants<=10))
   {
    $cheque+=20;
    $trace=$trace . '20,';
   }else if (($enfants>10)&&($enfants<=15))
   {
       $cheque+=30;
       $trace=$trace . '30,';
   }else if (($enfants>15)&&($enfants<=18))
   {
       $cheque+=50;
       $trace=$trace . '50,';
   }
}
$trace=substr($trace,0,-1);
$fusion=$cheque.'|'.$trace;
return $fusion;
}
function montantCheque($tableau)
{
 $tabmontant=explode('|',$this->chequeNoel($tableau));
 $montant=$tabmontant[0];
 return $montant;
}
function detailCheque($tableau)
{
 $tabvaleur=explode('|',$this->chequeNoel($tableau));
 $valeur=$tabvaleur[1];
 $chaine="";
 $valeur=explode(',',$valeur);
 foreach ($valeur as $val)
 {
  $chaine=$chaine. ' + ' . $val;
 }
 return $chaine;
}
function droitCheque($tableau)
{
    $tabdroit=explode('|',$this->chequeNoel($tableau));
    $droit=$tabdroit[0];
    if ($droit==0)
    {
     return 'Non';
    }else 
    {
     return 'Oui';
    }
}
}
class Magasin extends Employe {

    private $_nom;
    private $_adresse;
    private $_codepostal;
    private $_ville;
    private $_restaurant;

     public function setNom($sNom){
        return $this->_nom = $sNom;
       }
     public function setAdresse($sAdresse){
        return $this ->_adresse= $sAdresse;
     }
     public function setCodePostal($sCodePostal)
     {
        return $this->_codepostal = $sCodePostal;
     }
     public function setVille($sVille)
     {
        return $this -> _ville= $sVille;
     }
     public function setRestaurant($sRestaurant){
        if (($sRestaurant==0)||($sRestaurant==1))
        {
        return $this->_restaurant = $sRestaurant;
        }
        else
        {
         return $this->_restaurant ='Saisie incorrecte';
        }
       }
     public function getNom() 
     {
         return $this->_nom;
     }
     public function getAdresse() 
     {
         return $this->_adresse;
     }
     public function getCodePostal()
     {
         return $this->_codepostal;
     }
     public function getVille() 
     {
         return $this->_ville;
     }
     public function getRestaurant() 
     {
         return $this->_restaurant;
     }
     public function Ticket()
     {
         if ($this->_restaurant == 0)
         {
             return 'L\'employé bénéficie du ticket restaurant';
         } else if ($this->_restaurant == 1)
         {
             return 'L\'employé dispose d\'un restaurant d\'entreprise';
         } else
         {
             return 'La saisie est incorrecte, les données sont corrompues';
         }
     }
}
?>