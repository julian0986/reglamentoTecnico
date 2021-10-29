const d = document;

/* export default function countdown(id, limitDate, finalMessage) { */
function countdown(id, limitDate, finalMessage, message) {
  const $countdown = d.getElementById(id),
    countdownDate = new Date(limitDate).getTime();

  let countdownTempo = setInterval(() => {
    let now = new Date().getTime(),
      limitTime = countdownDate - now,
      days = Math.floor(limitTime / (1000 * 60 * 60 * 24)),
      hours = (
        "0" + Math.floor((limitTime % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60))
      ).slice(-2),
      minutes = (
        "0" + Math.floor((limitTime % (1000 * 60 * 60)) / (1000 * 60))
      ).slice(-2),
      seconds = ("0" + Math.floor((limitTime % (1000 * 60)) / 1000)).slice(-2);

    $countdown.innerHTML = `<h3>${message}: ${days}d ${hours}h ${minutes}m ${seconds}s</h3>`;

    // console.log(countdownDate,now,limitTime);

    if (limitTime < 0) {
      clearInterval(countdownTempo);
      $countdown.innerHTML = `<h3>${finalMessage}</h3>`;
    }
  }, 1000);
}

countdown(
  "countdown",
  "Mar 30, 2022 12:00:00",
  "Entrada en Vigencia",
  "Prioridad Alta"
);
countdown(
  "countdown2",
  "Mar 30, 2023 12:00:00",
  "Un año de Vigencia",
  "Prioridad Media"
);
countdown(
  "countdown3",
  "Mar 30, 2024 12:00:00",
  "Dos años Vigencia",
  "Prioridad Baja"
);
countdown(
  "countdown4",
  "Mar 30, 2025 12:00:00",
  "Tres años de Vigencia",
  "Prioridad Baja"
);
