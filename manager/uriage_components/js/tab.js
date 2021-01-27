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

    $.ajax({
        url: "uriage_components/rieki.php",
        method: "POST",
        data: {
          year: y,
        },
      })
      .done(function (data) {

        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'line',
        
            // The data for our dataset
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'Nobember', 'December'],
                datasets: [{
                    label: '利益(10万円)',
                    backgroundColor: 'rgb(77, 167, 216, 0.3)',
                    borderColor: 'rgb(77, 167, 216)',
                    data: [
                      $(data).find('.month1').html(),
                      $(data).find('.month2').html(),
                      $(data).find('.month3').html(),
                      $(data).find('.month4').html(),
                      $(data).find('.month5').html(),
                      $(data).find('.month6').html(),
                      $(data).find('.month7').html(),
                      $(data).find('.month8').html(),
                      $(data).find('.month9').html(),
                      $(data).find('.month10').html(),
                      $(data).find('.month11').html(),
                      $(data).find('.month12').html()
                    ]
                }]
            },
        
            // Configuration options go here
            options: {}
        });
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
  }else if($(this).attr('name') === "tab4") {

    $.ajax({
      url: "uriage_components/rieki.php",
      method: "POST",
      data: {
        year: $('#tab4year').val(),
      },
    })
    .done(function (data) {

      var ctx = document.getElementById('myChart').getContext('2d');
      var chart = new Chart(ctx, {
          // The type of chart we want to create
          type: 'line',
      
          // The data for our dataset
          data: {
              labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'Nobember', 'December'],
              datasets: [{
                  label: 'My First dataset',
                  backgroundColor: 'rgb(255, 99, 132)',
                  borderColor: 'rgb(255, 99, 132)',
                  data: [
                    $(data).find('.month1').html(),
                    $(data).find('.month2').html(),
                    $(data).find('.month3').html(),
                    $(data).find('.month4').html(),
                    $(data).find('.month5').html(),
                    $(data).find('.month6').html(),
                    $(data).find('.month7').html(),
                    $(data).find('.month8').html(),
                    $(data).find('.month9').html(),
                    $(data).find('.month10').html(),
                    $(data).find('.month11').html(),
                    $(data).find('.month12').html()
                  ]
              }]
          },
      
          // Configuration options go here
          options: {}
      });
    });
  }
});