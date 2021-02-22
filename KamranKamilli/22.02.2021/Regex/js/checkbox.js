let show = true;

function showCheckboxes() {
  event.stopPropagation();
  let checkboxes = document.getElementById("checkBoxes");
  if (show) {
    checkboxes.style.display = "block";
    show = false;
  } else {
    checkboxes.style.display = "none";
    show = true;
  }
}
window.onclick = function (event) {
    if (!event.target.closest('.multipleSelection')) {
        document.getElementById("checkBoxes").style.display = "none";
        show = true;
    }
};
