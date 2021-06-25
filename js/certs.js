$(document).ready(function () {
  $("#name").keyup(function () {
    // Getting the current value of textarea
    var currentText = $(this).val().toUpperCase();

    // Setting the Div content
    $(".nm").text(currentText);
  });

  $("#address").keyup(function () {
    // Getting the current value of textarea
    var currentText = $(this).val().toUpperCase();

    // Setting the Div content
    $(".ad").text(currentText);
  });

  $("#purpose").keyup(function () {
    // Getting the current value of textarea
    var currentText = $(this).val().toUpperCase();

    // Setting the Div content
    $(".pr").text(currentText);
  });

  $(".cert-info").on("change", "#month", function () {
    $(".mt").text(this.value);
  });

  $(".cert-info").on("change", "#day", function () {
    $(".dy").text(this.value);
  });

  $("#day").keyup(function () {
    // Getting the current value of textarea
    var currentText = $(this).val().toUpperCase();

    // Setting the Div content
    $(".dy").text(currentText);
  });

  $("#year").keyup(function () {
    // Getting the current value of textarea
    var currentText = $(this).val().toUpperCase();

    // Setting the Div content
    $(".yr").text(currentText);
  });

  $("#cedula-no").keyup(function () {
    // Getting the current value of textarea
    var currentText = $(this).val().toUpperCase();

    // Setting the Div content
    $(".ced-no").text(currentText);
  });

  $("#cedula-issued-at").keyup(function () {
    // Getting the current value of textarea
    var currentText = $(this).val().toUpperCase();

    // Setting the Div content
    $(".ced-at").text(currentText);
  });

  $(".cert-info").on("change", "#cedula-date", function () {
    $(".ced-date").text(this.value);
  });
});
