/* Searcher */

$("#searcher input").change(function () {
  var search = $("#searcher input").val();
  var regex = /^[a-zA-Z0-9nNáéíóúÁÉÍÓÚ ]*$/;

  if (!regex.test(search)) {
    $("#searcher input").val("");
  } else {
    var evaluateSearch = search.replace(/ /g, "-");
    var searchRoute = $("#searcher").attr("action");

    if ($("#searcher input").val() != "") {
      $("#searcher").attr("action", searchRoute + "/" + evaluateSearch);
    }

  }
})