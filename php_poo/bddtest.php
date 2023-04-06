<!doctype html>
<html lang="fr">


  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Accueil</title>
  </head>
  <body>
      <div class="bg">
        <div class="container">
          <h1>Title</h1>
          <h2>Sub-title</h2>
          <div class="name">
          <p style='display: inline;'>
            </p>
          </div>
        </div>

        
        
        
        <div class="tab">
          <?php
            try{
                  $bd = new PDO("mysql:host=localhost;dbname=php", "root");
                }catch(Exception $e){
                die($e->getMessage);
                }
            $req = $bd->prepare('SELECT * FROM personnage');
            $req->execute();
            $result = $req->fetchall(PDO::FETCH_ASSOC);
          ?>
          <table>
            <tr>
              <th>id</th>
              <th>espece</th>
              <th>nom</th>
              <th>pv</th>
              <th>force</th>
              <th>niveau</th>
              <th>exp</th>
            </tr>
            <?php foreach ($result as $item): ?>
            <tr>
              <td><?php echo $item['idPerso'] ?></td>
              <td><?php echo $item['espece'] ?></td>
              <td><?php echo $item['nom'] ?></td>
              <td><?php echo $item['pv'] ?></td>
              <td><?php echo $item['forceP'] ?></td>
              <td><?php echo $item['niveau'] ?></td>
              <td><?php echo $item['exp'] ?></td>
            </tr>
            <?php endforeach; ?>

          </table>
        </div>
      </div>
      <div class="logout">
        <a href="logout.php" class="button">Logout</a>
      </div> 
      <footer>
        <a href="logout.php">O</a>
      </footer>
    </form>
  </body>
</html>