$(window).on('load', function () {
  var y = new Date().getFullYear();

  $.ajax({
      url: "./uriage_components/uriage.php",
      method: "POST",
      data: {
        year: y,
        month: "01",
      },
    })
    .done(function (data) {
      $('#table1').html(data);
    });

  $.ajax({
      url: "./uriage_components/keihi.php",
      method: "POST",
      data: {
        year: y,
        month: "01",
      },
    })
    .done(function (data) {
      $('#table2').html(data);
    });

  $.ajax({
      url: "uriage_components/rieki.php",
      method: "POST",
      data: {
        year: y,
      },
    })
    .done(function (data) {
      $('#table3').html(data);
    });
});

$('select').on("change", function () {
  if ($(this).attr('name') === "tab1") {
    $.ajax({
        url: "./uriage_components/uriage.php",
        method: "POST",
        data: {
          year: $('#tab1year').val(),
          month: $('#tab1month').val(),
        },
      })
      .done(function (data) {
        $('#table1').html(data);
      });
  } else if ($(this).attr('name') === "tab2") {
    $.ajax({
        url: "./uriage_components/keihi.php",
        method: "POST",
        data: {
          year: $('#tab2year').val(),
          month: $('#tab2month').val(),
        },
      })
      .done(function (data) {
        $('#table2').html(data);
      });

  }else if ($(this).attr('name') === "tab3") {
    $.ajax({
        url: "./uriage_components/rieki.php",
        method: "POST",
        data: {
          year: $('#tab3year').val(),
        },
      })
      .done(function (data) {
        $('#table3').html(data);
      });
  }
});