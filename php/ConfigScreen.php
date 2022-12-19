<!-- simple html page -->
<!DOCTYPE html>
<html>

<head>
   <meta charset="UTF-8">
   <link rel="stylesheet" href="css/settingsScreen.css">
</head>

<body>
   <div>
      <?php
      echo ("Configurações do jogo: ");
      ?>
   </div>
   <div>
      <?php
      echo (isset($_POST['name']) ? $_POST['name'] : 'No name');
      ?>
   </div>
   <div>
      <?php
      echo (isset($_POST['game-scenario']) ? $_POST['game-scenario'] : 'No game-scenario');
      ?>
   </div>
   <div>
      <?php
      echo (isset($_POST['intervalo-abertura-canos']) ? $_POST['intervalo-abertura-canos'] : 'No intervalo-abertura-canos');
      ?>
   </div>
   <div>
      <?php
      echo (isset($_POST['distancia-entre-canos']) ? $_POST['distancia-entre-canos'] : 'No distancia-entre-canos');
      ?>
   </div>
   <div>
      <?php
      echo (isset($_POST['game-speed']) ? $_POST['game-speed'] : 'No game-speed');
      ?>
   </div>
   <div>
      <?php
      echo (isset($_POST['personagens']) ? $_POST['personagens'] : 'No personagens');
      ?>
   </div>
   <div>
      <?php
      echo (isset($_POST['game-type']) ? $_POST['game-type'] : 'No game-type');
      ?>
   </div>
   <div>
      <?php
      echo (isset($_POST['character-speed']) ? $_POST['character-speed'] : 'No character-speed');
      ?>
   </div>
</body>

</html>