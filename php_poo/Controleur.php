<?php
<<<<<<< HEAD
class PersonnageControleur{
    public $tabPerso = array();
    public function __construct($this,$nom,$pv,$type,$force,$niveau){
        
=======
    class PersonnageControleur{
        public $tabPerso = array();
        public function __construct($nom,$pv,$type,$force,$niveau){
            $perso = new Personnage($nom,$pv,$type,$force,$niveau);
            // $perso = new Personnage('bob',100,"eau",40,3);
        }

        public function creerPerso(){
            $perso = array(
                'nom' => $nom,
                'pv' => $pv,
                'type' => $type,
                'force' => $force,
                'niveau' => $niveau,
                echo "toto"
            );
            array_push($this -> tabPerso,$perso);
        }

        public function Afficher(){
            foreach($this->tabPerso as $perso)
                echo "Nom: ".$perso['nom']."<br>";
                echo "Pv: ".$perso['pv']."<br>";
                echo "Type: ".$perso['type']."<br>";
                echo "Force: ".$perso['force']."<br>";
                echo "Niveau: ".$perso['niveau']."<br>";
        }
>>>>>>> 418f95b14836f14897872e5b649692a3222b9a8e
    }
    public function creerPerso(){
        echo "toto"
    }
    public function Afficher(){

    }
}
?>
