<?php
class Personnage {

    // Propriété
<<<<<<< HEAD
=======

>>>>>>> justin
    private string $nom;
    private int $pv;
    private string $type;
    private int $force;
    private int $niveau;

<<<<<<< HEAD
    //==================Méthodes==================
    
    //__________________Constructeur__________________
=======

    //==================Méthodes==================
    
    //__________________Constructeur__________________

>>>>>>> justin
    public function __construct($nom, $pv, $type, $force, $niveau) {
    $this -> nom = $nom;
    $this -> pv = $pv;
    $this -> type = $type;
    $this -> force = $force;
    $this -> niveau = $niveau;
<<<<<<< HEAD
	}

    //__________________Attaquer__________________
    public function attaquer() {
=======
    $this -> exp = 0
    $this -> def = 3
	}

    //__________________Attaquer__________________

    public function attaquer($atkJoueur, $pvEnnemi) {
>>>>>>> justin

        //pv ennemi - attaque du joueur ?
        //retourner pv ennemi après attaque

<<<<<<< HEAD
        echo "attaque";
    }

    //__________________Défendre__________________
=======
        $pvEnnemi = $pvEnnemi - $atkJoueur;
        echo "attaque";
        return $pvEnnemi
    }

    //__________________Défendre__________________

>>>>>>> justin
    public function défendre() {

        //pv joueur - attaque ennemi ?
        //retourner pv joueur

        //boost de défence pour joueur ?

        echo "defendre";
    }

    //_______________Gagne Expérience_______________
<<<<<<< HEAD
    public function getExp() {
=======

    public function getExp($niveau, $exp) {
>>>>>>> justin

        //joueur gagne exp basé sur ennemi vaincu?
        //Basé sur niveau ennemi? type ennemi?
        //retourner exp joueur après ajout
<<<<<<< HEAD

        echo "level up";
    }

    //____________________nom_____________________
=======
        $expAct = $exp;
        $baseCost = 100;
        $cost = $baseCost * 1,4 ** $niveau;
        while ($exp > 0) {
            if ($exp >= $cost) {
                echo "level up";
                $exp = $exp - $cost
                $niveau += 1
                $cost = $baseCost * 1,4 ** $niveau;
            }
        }
        
        return $niveau
    }

    //____________________nom_____________________

>>>>>>> justin
    public function set_nom($nom) {
        $this -> nom = $nom;
    }

    public function get_nom() {
        return $this -> nom;
    }

    //____________________pv_____________________
<<<<<<< HEAD
=======

>>>>>>> justin
    public function set_pv($pv) {
        $this -> pv = $pv;
    }

    public function get_pv() {
        return $this -> pv;
    }

    //____________________type_____________________
<<<<<<< HEAD
=======

>>>>>>> justin
    public function set_type($type) {
        $this -> type = $type;
    }

    public function get_type() {
        return $this -> type;
    }

    //____________________force_____________________
<<<<<<< HEAD
=======

>>>>>>> justin
    public function set_force($force) {
        $this -> force = $force;
    }

    public function get_force() {
        return $this -> force;
    }

    //____________________niveau_____________________
<<<<<<< HEAD
=======
    
>>>>>>> justin
    public function set_niveau($niveau) {
        $this -> niveau = $niveau;
    }

    public function get_niveau() {
        return $this -> niveau;
    }

    
}

$bob = new Personnage("bob", 16, "human", 12, 0);
echo $bob->get_nom();
echo "<br>";
echo $bob -> get_pv();

?>