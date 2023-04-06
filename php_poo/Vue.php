<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Vue.css">
    <title>Vue</title>
</head>
<body>
    <!-- Formulaire -->

    <!-- Personnage -->

    <div class="container">
        <div class="bouton">
            <button id="B1" class="BoutonCree">Ajouter Un Personnage</button>
        </div>
        <div class="bouton2">
            <button id="B3" class="BoutonCree2">Ajouter Un Personnage</button>
        </div>
    </div>
    <div class="vs">
            <stronger class="VS1">VS</stronger>
    </div>
    <div class="CboutonCombat">
            <button id="B2" class="BoutonCombat">Commencer le Duel</button>
    </div>
    <br>
    <div class="Verif">
            <button id="B4" class="BoutonVerif">Vérification</button>
    </div>

    <div class="carrediv">
        <div id="carre" style="display: none;">
            <input type="image" class="cut" id="B1.1" value="" src="image/croix.png">
            <div class="zoneform">
                <br>
                <div class="Titre"><strong>PERSONNAGE</strong></div>
                <br>
                    <ul class="Formulaire">
                        <li class="nom"><input type="text" size="30" id="nom" name="nom" placeholder="  Nom" style="height:25px;border-radius:5px;width:150px;" class="nom" required/> </li>
                        <li class="type"><select id="type" name="type">
                                            <option> Type</option>
                                            <option> Eau</option>
                                            <option> Feu</option>
                                            <option> Terre</option>
                                            <option> Vent</option>
                                        </select>
                        </li>
                        <li class="espece"><select id="espece" name="espece">
                                            <option> Espèce</option>
                                            <option> Humanoide</option>
                                            <option> Elfe</option>
                                            <option> Nain</option>
                                            <option> Orc</option>
                                            <option> Dargon</option>
                                            <option> Necromancien</option>
                                        </select>
                        </li>
                    </ul>
                    <button class="BouttonVali" id="V1" value="2" name="Validation">Validation</button>
                </form>
            </div>
        </div>
    </div>

    <div class="carrediv2">
        <div id="carre2" style="display: none;">
            <input type="image" class="cut" id="B3.1" value="" src="image/croix.png">
            <div class="zoneform">
                <br>
                <div class="Titre"><strong>PERSONNAGE</strong></div>
                <br>
                    <ul class="Formulaire">
                        <li class="nom"><input type="text" size="30" id="nom" name="nom" placeholder="  Nom" style="height:25px;border-radius:5px;width:150px;" class="nom" required/> </li>
                        <li class="type"><select id="type" name="type">
                                            <option> Type</option>
                                            <option> Eau</option>
                                            <option> Feu</option>
                                            <option> Terre</option>
                                            <option> Vent</option>
                                        </select>
                        </li>
                        <li class="espece"><select id="espece" name="espece">
                                            <option> Espèce</option>
                                            <option> Humanoide</option>
                                            <option> Elfe</option>
                                            <option> Nain</option>
                                            <option> Orc</option>
                                            <option> Dargon</option>
                                            <option> Necromancien</option>
                                        </select>
                        </li>
                    </ul>
                    <button class="BouttonVali2" id="V2" value="2" name="Validation">Validation</button>
                </form>
            </div>
        </div>
    </div>

    <script src="form.js"></script>
</body>
</html>


