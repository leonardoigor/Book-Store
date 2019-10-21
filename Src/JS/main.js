$(".btnedit").click(function(e) {
  element = $(this)
    .parent()
    .parent()[0];
  changeSelected(element);
});
function changeSelected(element) {
  element.className = "seleted";
}
function getElement(e) {
  console.log($(this));

  return element;
}
