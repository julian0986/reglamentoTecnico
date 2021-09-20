function update() {
  let checked = 0;
  let myBar = document.getElementById("myBar");
  let percent = document.getElementById("percent");
  let general = document.querySelector(".generales");
  //Reference the Form.
  let options = document.getElementById("options");

  //Reference all the CheckBoxes in Table.
  boxes = options.querySelectorAll("input[type='checkbox']:checked");
  checked = boxes.length;

  myBar.style.width = (checked / 122) * 100 + "%";

  //console.log(percent.children);
  let porcentaje = document.createElement("p");

  let valor = Math.round((checked / 122) * 100);
  //console.log(valor);
  porcentaje.innerHTML = `${valor}%`;
  console.log(porcentaje);
  percent.appendChild(porcentaje);
  console.log(percent);
  percent.removeChild(percent.children[0]);

  if (checked == 0) {
    alert("Please select CheckBoxe(s).");
  }
  return true;
}

checks = document.querySelectorAll("input[type='checkbox']");
checks.forEach(function (box) {
  box.addEventListener("change", function (e) {
    update();
  });
});
