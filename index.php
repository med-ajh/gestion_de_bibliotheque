<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    
      <?php
      include_once 'IHM/public/header.php';
      $adresse=$_GET['adresse'];
      $infos_adresse=explode('/',$adresse);
      if($adresse!='')
      {
      $controleur=$infos_adresse[0];
  
       if($controleur=='livre') 
           include_once 'Traitement/Livre.php';
          else if($controleur=='dictionnaire')
          include_once 'Traitement/Dictionnaire.php';
        else
        echo "Erreur !!!";
      }
      else
      {
      ?>
        <center>
      <a href="livre">
        <h1>Gestion des livres</h1>
      </a>
      <a href="dictionnaire">
        <h1>Gestion des dictionnaires</h1>
      </a>
        </center>

        <?php } 
        include_once 'IHM/public/footer.php';
        ?>
    </body>
</html>
