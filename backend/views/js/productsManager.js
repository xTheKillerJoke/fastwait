$.ajax({
  url: "ajax/tableProductsManager.ajax.php",
  success: function (response) {}
})

/* $(function () {
  $(".tableDS").DataTable({
    "ajax": "ajax/tableProductsManager.ajax.php"
  })
}) */

$(document).ready(function () {
  $("#tableDS").DataTable({
    "serverSide": true,
    "ajax": "ajax/tableProductsManager.ajax.php",
    "deferRender": true,
    "retrieve": true,
    "processing": true
  });
});

/* $(document).ready(function () {
  $("#getLink").click(function (e) {
    e.preventDefault();

    var link = $("#link").val();

    var data = new FormData()
    data.append("productLink", link);



    $.ajax({
      type: "POST",
      url: "ajax/tableProductsManager.ajax.php",
      data: "data",
      cache: false,
      contentType: false,
      processdata: false,
      dataType: "json",
      success: function (response) {
        console.log("response", response);
      }
    });
  });
}) */

$("#getLink").on("click", function (e) {
  var link = $("#link").val();

  var data = new FormData();
  data.append("productLink", link);

  $.ajax({
    url: "ajax/tableProductsManager.ajax.php",
    data: "data",
    dataType: "text",
    contentType: false,
    processdata: false,
    type: "POST",
    success: function (data) {
      console.log(data);
    }
  });

  e.preventDefault();
});