
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
    $this -> exp = 0;
    $this -> defWait = 3;
    $this -> def = False;
	}

    //__________________Attaquer__________________

    public function attaquer($atkJoueur, $pvEnnemi) {

        //pv ennemi - attaque du joueur ?
        //retourner pv ennemi après attaque

        $pvEnnemi = $pvEnnemi - $atkJoueur;
        echo "attaque";
        return $pvEnnemi
    }

    //__________________Défendre__________________

    public function défendre($def) {

        //joueur ne prends ancun dégat si en défence
        //la défence à un cooldown de 3 tours pour l'instant
        if ($def >= 3) {
            def = True;
            echo "defendre";
        } else {
            echo "defence en cooldown";
        }
    }

    //_______________Gagne Expérience_______________

    public function getExp($niveau, $exp) {

        //joueur gagne exp basé sur ennemi vaincu?
        //Basé sur niveau ennemi? type ennemi?
        //retourner exp joueur après ajout
        $expAct = $exp;
        $baseCost = 100;
        $cost = $baseCost * 1,4 ** $niveau;
        while ($exp > 0) {
            if ($exp >= $cost) {
                echo "level up";
                $exp = $exp - $cost;
                $niveau += 1;
                $cost = $baseCost * 1,4 ** $niveau;
            }
        }
        
        return $niveau
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
