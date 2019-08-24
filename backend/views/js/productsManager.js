$.ajax({
  url: "ajax/tableProductsManager.ajax.php",
  success: function (respuesta) {
    console.log("respuesta", respuesta)
  }
})

$(function () {
  $(".tableDS").DataTable({
    "ajax": "ajax/tableProductsManager.ajax.php"
  })
})