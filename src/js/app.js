function update() {
  let checked = 0;
  let myBar = document.getElementById("myBar");
  //Reference the Form.
  let options = document.getElementById("options");

  //Reference all the CheckBoxes in Table.
  boxes = options.querySelectorAll("input[type='checkbox']:checked");
  checked = boxes.length;

  myBar.style.width = (checked / 122) * 100 + "%";
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
