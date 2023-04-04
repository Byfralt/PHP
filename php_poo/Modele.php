<?php
class Personnage {

    // Propriété
    private string $nom;
    private int $pv;
    private string $type;
    private int $force;
    private int $niveau;

    //==================Méthodes==================
    
    //__________________Constructeur__________________
    public function __construct($nom, $pv, $type, $force, $niveau) {
    $this -> nom = $nom;
    $this -> pv = $pv;
    $this -> type = $type;
    $this -> force = $force;
    $this -> niveau = $niveau;
	}

    //__________________Attaquer__________________
    public function attaquer() {

        //pv ennemi - attaque du joueur ?
        //retourner pv ennemi après attaque

        echo "attaque";
    }

    //__________________Défendre__________________
    public function défendre() {

        //pv joueur - attaque ennemi ?
        //retourner pv joueur

        //boost de défence pour joueur ?

        echo "defendre";
    }

    //_______________Gagne Expérience_______________
    public function getExp() {

        //joueur gagne exp basé sur ennemi vaincu?
        //Basé sur niveau ennemi? type ennemi?
        //retourner exp joueur après ajout

        echo "level up";
    }

    //____________________nom_____________________
    public function set_nom($nom) {
        $this -> nom = $nom;
    }

    public function get_nom() {
        return $this -> nom;
    }

    //____________________pv_____________________
    public function set_pv($pv) {
        $this -> pv = $pv;
    }

    public function get_pv() {
        return $this -> pv;
    }

    //____________________type_____________________
    public function set_type($type) {
        $this -> type = $type;
    }

    public function get_type() {
        return $this -> type;
    }

    //____________________force_____________________
    public function set_force($force) {
        $this -> force = $force;
    }

    public function get_force() {
        return $this -> force;
    }

    //____________________niveau_____________________
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