<!DOCTYPE html>
<html>

<head>
   <meta charset="UTF-8">
   <link rel="stylesheet" href="css/settingsScreen.css">
</head>

<body>
   <div>
      <?php
      echo ("Configurações escolhidas por você: ");
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

   <!-- Código php para conectar no banco de dados -->
   <?php
   include("Conexao.php");

   // Criar a conexão
   $conn = new Conexao();

   // Checar a conexão
   if ($conn->connect_error()) {
      die("Connection failed: " . $conn->connect_error());
   }

   // Inserir dados no banco
   $sql = "INSERT INTO settings (nome_jogador, abertura_canos, dist_canos, velocidade_jogo, personagem, tipo_jogo, tema_jogo, velocidade_personagem, pontuação)
   VALUES ('" . $_POST['name'] . "', '" . $_POST['intervalo-abertura-canos'] . "', '" . $_POST['distancia-entre-canos'] . "', '" . $_POST['game-speed'] . "', '" . $_POST['personagens'] . "', '" . $_POST['game-type'] . "', '" . $_POST['game-scenario'] . "', '" . $_POST['character-speed'] . "', '" . $_POST['score-item'] . "')";

   if (
      $conn->query(
         $sql
      ) === TRUE
   ) {
      echo "Dados inseridos com sucesso no banco de dados!";
   } else {
      echo "Oops! Tivemos um problema!" . $sql . "<br>" . $conn->error();
   }

   $conn->close();

   echo (
      "<button onclick='goToIndex()'>Ir para o game</button>
      <script>
      const goToIndex = () => {
         location.href = '../game.php';
      }
      </script>"
   );
   ?>
</body>

</html>