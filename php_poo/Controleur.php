<?php
class PersonnageControleur{
    public $tabPerso = array();
    public $view = 
    public function __construct($this,$nom,$pv,$type,$force,$niveau){
    class PersonnageControleur{
        public $tabPerso = array();
        public function __construct($nom,$pv,$type,$force,$niveau){
            $perso = new Personnage($nom,$pv,$type,$force,$niveau);

        }

        public function creerPerso(){
            $perso = array(
                'nom' => $nogit,
                'pv' => $pv,
                'type' => $type,
                'force' => $force,
                'niveau' => $niveau,
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                echo "toto"
=======
>>>>>>> Kyllian
=======
>>>>>>> dev
=======
>>>>>>> Kyllian
            );
            array_push($this -> tabPerso,$perso);
        }

        // public function Afficher(){
        //     foreach($this->tabPerso as $perso)
        //         echo "Nom: ".$perso['nom']."<br>";
        //         echo "Pv: ".$perso['pv']."<br>";
        //         echo "Type: ".$perso['type']."<br>";
        //         echo "Force: ".$perso['force']."<br>";
        //         echo "Niveau: ".$perso['niveau']."<br>";
        //     }

        public function AfficherPerso(){
            if (isset($_POST['nom'])){
                $nom = $_POST['nom'];
            }
            if (isset($_POST['pv'])){
                $pv = $_POST['pv'];
            }
            if (isset($_POST['type'])){
                $type = $_POST['type'];
            }
            if (isset($_POST['force'])){
                $force = $_POST['force'];
            }
            $p = new Mage($nom,$pv,$type,$force)
            array_push($this ->personnage,$p);
            $this -> view = new PersonnageView($this -> personnage);
            $t =  json_encode($tabPerso);
            $this -> AfficherPerso();
        }
    }
    public function SavePerso(){
        // rien pour le moment
    }
    }

    //__Attaquer__

    public function attaquer($atkJoueur, $pvEnnemi) {

        //pv ennemi - attaque du joueur ?
        //retourner pv ennemi après attaque

        $pvEnnemi = $pvEnnemi - $atkJoueur;
        echo "attaque";
        return $pvEnnemi
    }

    //__Défendre__

    public function défendre($defWait) {

        //joueur ne prends ancun dégat si en défence
        //la défence à un cooldown de 3 tours pour l'instant
        if ($defWait >= 3) {
            def = True;
            echo "defendre";
        } else {
            echo "defence en cooldown";
        }
    }

    //__Gagne Expérience__

    public function getExp($niveau, $exp) {

        //joueur gagne exp basé sur ennemi vaincu?
        //Basé sur niveau ennemi? type ennemi?
        //retourner exp joueur après ajout
        $expAct = $exp;
        $baseCost = 100;
        $cost = $baseCost * 1,4  $niveau;
        while ($exp > 0) {
            if ($exp >= $cost) {
                echo "level up";
                $exp = $exp - $cost;
                $niveau += 1;
                $cost = $baseCost * 1,4  $niveau;
<<<<<<< HEAD
<<<<<<< HEAD
=======
                echo "titi";
>>>>>>> dev
            }
        }

        return $niveau
    }
<<<<<<< HEAD


}
=======
=======
            }
        }
        return $niveau
    }
>>>>>>> Kyllian
    // creation de liste avec info de perso
    // public $PersonnageJeu = array();
    // _____($nom,$pv,$type,$force,$niveau)_____
    // _____ _____( HUMANOÏDE ) _____ _____
    // $p = new Humanoïde(Steve,100,eau,10);
    // array_push($this ->Humanoïde,$p);

    // $p = new Humanoïde(Alex,100,feu,10);
    // array_push($this ->Humanoïde,$p);

    // $p = new Humanoïde(Herobrine,100,terre,10);
    // array_push($this ->Humanoïde,$p);

    // $p = new Humanoïde(Ben,100,vent,10);
    // array_push($this ->Humanoïde,$p);

    // _____ _____( Elfe ) _____ _____
    // $p = new Elfe(Yavana,80,eau,10);
    // array_push($this ->Elfe,$p);

    // $p = new Elfe(Othar,80,feu,10);
    // array_push($this ->Elfe,$p);
    
    // $p = new Elfe(Thalion,80,terre,10);
    // array_push($this ->Elfe,$p);
    
    // $p = new Elfe(Elwing,80,vent,10);
    // array_push($this ->Elfe,$p);

    // _____ _____( Nain ) _____ _____
<<<<<<< HEAD
    // ils sont petit mais c'est pas une critique meme si ils sont tres petit (comme des fourmis)
}   
>>>>>>> dev
=======
    // ils sont petit mais c'est pas une critique meme si ils sont tres petit (comme des fourmisgit)
}   
>>>>>>> Kyllian
?>
