function update() {
  let checked = 0;
  let myBar = document.getElementById("myBar");
  let percent = document.getElementById("percent");
  let general = document.querySelector(".generales");
  //Reference the Form.
  let options = document.getElementById("options");

  //Reference all the CheckBoxes in Table.
  boxes = options.querySelectorAll("#options input[type='checkbox']:checked");
  checked = boxes.length;

  myBar.style.width = (checked / 125) * 100 + "%";

  //console.log(percent.children);
  let porcentaje = document.createElement("p");

  let valor = ((checked / 122) * 100).toFixed(1);
  //console.log(valor);
  porcentaje.innerHTML = `${valor}%`;
  console.log(porcentaje);
  percent.appendChild(porcentaje);
  console.log(percent);
  percent.removeChild(percent.children[0]);

  if (checked == 0) {
    alert("Por favor seleccione el campo No/Si.");
  }
  return true;
}

checks = options.querySelectorAll("input[type='checkbox']");
checks.forEach(function (box) {
  box.addEventListener("change", function (e) {
    update();
  });
});

/* barra2 */
function update2() {
  let chequedado = 0;
  let myBar2 = document.getElementById("myBar2");
  let percent2 = document.getElementById("percent2");
  //Reference the Form.
  let option2 = document.getElementById("option2");

  //Reference all the CheckBoxes in Table.
  boxes = option2.querySelectorAll("input[type='checkbox']:checked");
  chequedado = boxes.length;
  console.log(chequedado);

  myBar2.style.width = (chequedado / 13) * 100 + "%";

  //console.log(percent.children);
  let porcentaje2 = document.createElement("p");

  let valor2 = ((chequedado / 13) * 100).toFixed(1);
  //console.log(valor);
  porcentaje2.innerHTML = `${valor2}%`;
  
  percent2.appendChild(porcentaje2);
  percent2.removeChild(percent2.children[0]);

  if (chequedado == 0) {
    alert("Por favor seleccione el campo No/Si.");
  }
  return true;
}

checks2 = option2.querySelectorAll("input[type='checkbox']");
checks2.forEach(function (box2) {
  box2.addEventListener("change", function (e) {
    update2();
  });
});