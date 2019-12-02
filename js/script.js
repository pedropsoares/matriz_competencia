document.addEventListener("DOMContentLoaded", function() {
  var Modalelem = document.querySelector(".modal");
  var instance = M.Modal.init(Modalelem);
});

$(document).ready(function() {
  $("select").material_select();
  var url = document.location.href;
  var menuItems = ["Colaboradores", "Setores", "Competencias", "Grupos"];
  menuItems.forEach(function(item) {
    if (url.indexOf(item) > -1) {
      $("#nav li").removeClass("active");
      $("#" + item).addClass("active");
    }
  });
});
