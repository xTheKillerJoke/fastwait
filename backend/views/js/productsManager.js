$.ajax({
  url: "ajax/tableProductsManager.ajax.php",
  success: function (respuesta) {
    console.log("respuesta", respuesta)
  }
})

/* $(function () {
  $(".tableDS").DataTable({
    "ajax": "ajax/tableProductsManager.ajax.php"
  })
}) */

$(document).ready(function () {
  $('#tableDS').DataTable({
    "serverSide": true,
    "ajax": "ajax/tableProductsManager.ajax.php",
    "deferRender": true,
    "retrieve": true,
    "processing": true
  });
});