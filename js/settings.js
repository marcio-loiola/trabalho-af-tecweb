function changeCenario() {
  TEMA = selectElements('input[name="game-scenario"]:checked').value;

  let barreiras = selectElements(".par-de-barreiras");
  let game = selectElements(".game");

  if (TEMA == "diurno") {
    game.style.background = "#00bfff";
    barreiras.forEach(
      (e) => (e.style.filter = "drop-shadow(16px 16px 20px black)")
    );
  } else if (TEMA == "noturno") {
    barreiras.forEach(
      (e) =>
        (e.style.filter =
          "drop-shadow(16px 16px 20px black) hue-rotate(90deg) brightness(0.6)")
    );
    game.style.background = "var(--background--dark)";
  }
}

function changeAberturaCanos() {
  let nivelAbertura = selectElements(
    'input[name="intervalo-abertura-canos"]:checked'
  ).value;

  const novaAbertura = {
    facil: 350,
    media: 300,
    dificil: 200,
  };

  console.log("função 3");

  CANOS_ABERTURA = novaAbertura[nivelAbertura];
}

function changeDistCanos() {
  let nivelDistancia = selectElements(
    'select[name="distancia-entre-canos"]:checked'
  ).value;

  const novaDistancia = {
    facil: 500,
    media: 400,
    dificil: 300,
  };

  CANOS_DISTANCIA = novaDistancia[nivelDistancia];
}

function changeVelocidadeJogo() {
  let velocidade = selectElements('input[name="velocidade-do-jogo"]').value;

  JOGO_VELOCIDADE = velocidade;
}

function changePersonagem() {
  let personagem = selectElements('select[name="personagem-select"]').value;

  PERSONAGEM_FONTE = personagem;
}

function changeModoDeJogo() {
  let modo = selectElements('input[name="game-type"]:checked').value;

  JOGO_TIPO = modo;
}

function changeVelocidadePersonagem() {

  /* update this function to <input type="range" name="character-speed" */

  let velocidade = selectElements(
    'input[name="character-speed"]:checked'
  ).value;

  const novaVelocidade = {
    baixa: [3, -3],
    media: [8, -5],
    alta: [10, -7],
  };

  PERSONAGEM_VELOCIDADE = novaVelocidade[velocidade];
}

function changeIncrementoPontuacao() {
  let pontuacao = selectElements('input[name="score-item"]:checked').value;

  INCREMENTO_PONTUACAO = pontuacao;
}
