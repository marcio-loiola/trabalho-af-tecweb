<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Flappy Bird</title>
    <link rel="stylesheet" href="css/flappy.css">
    <link rel="stylesheet" href="css/layout.css">
</head>

<body class="conteudo">
    <h1>Flappy Bird</h1>
    <div class="game-container">
        <div class="settings">
            <h1 class="title-forms"> Configurações do jogo </h1>
            <form class="form-settings" action="php/ConfigScreen.php" method="POST">
                <div class="form-item">
                    <label for="name">Nome do jogador:</label>
                    <input type="text" id="name" name="name" placeholder="Digite seu nome">
                </div>
                <div class="form-item">
                    <label for="scenario">Escolha o cenário:</label>
                    <input type="radio" name="game-scenario" onchange="changeCenario()" value="diurno" checked> Diurno
                    <input type="radio" name="game-scenario" onchange="changeCenario()" value="noturno"> Noturno
                </div>
                <div class="form-item">
                    <label for="abertura-canos"> Intervalo entre abertura dos canos: </label>
                    <input type="radio" name="intervalo-abertura-canos" onchange="changeAberturaCanos()" value="facil">
                    Fácil
                    <input type="radio" name="intervalo-abertura-canos" onchange="changeAberturaCanos()" value="medio"
                        checked> Médio
                    <input type="radio" name="intervalo-abertura-canos" onchange="changeAberturaCanos()"
                        value="dificil"> Difícil
                </div>

                <div class="form-item">
                    <label for="distancia-canos">Distância entre os canos:</label>
                    <select name="distancia-entre-canos" onchange="changeDistCanos()" checked>
                        <option value="facil"> Fácil </option>
                        <option value="medio"> Médio </option>
                        <option value="dificil"> Difícil </option>
                    </select>
                </div>
                <div class="form-item">
                    <label for="speed">Velocidade do jogo</label>
                    1<input type="range" name="game-speed" onchange="changeVelocidadeJogo()" min="1" max="10"
                        value="5">10
                </div>
                <div class="form-item">
                    <label for="characters"> Personagens </label>
                    <select name="personagens" onchange="changePersonagem()">
                        <option value="1"> Personagem 1 </option>
                        <option value="2"> Persongaem 2 </option>
                        <option value="3"> Persongaem 3 </option>
                    </select>
                </div>
                <div class="form-item">
                    <label for="game-type">Tipo de jogo: </label>
                    <input type="radio" name="game-type" onchange="changeModoDeJogo()" value="treino"> Treino
                    <input type="radio" name="game-type" onchange="changeModoDeJogo()" value="real" checked> Real
                </div>
                <div class="form-item">
                    <label for="speed">Velocidade do personagem: </label>
                    1<input type="range" name="character-speed" min="1" max="3" value="1">3
                </div>
                <div class="form-item">
                    <label for="score"> Pontuação: </label>
                    <input type="radio" name="score-item" value="1" checked> 1
                    <input type="radio" name="score-item" value="10"> 10
                    <input type="radio" name="score-item" value="100"> 100
                </div>
                <div class="form-submit">
                    <input type="submit" value="Salvar configurações">
                </div>
            </form>
        </div>
        <div id="flappy" class="game" wm-flappy>
        </div>
        <script src="js/globalFunctions.js"></script>
        <script src="js/globalVariables.js"></script>
        <script src="js/settings.js"></script>
        <script src="js/flappy.js"></script>
</body>

</html>