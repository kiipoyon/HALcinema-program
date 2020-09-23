//ranking slide数
let cnt = 6;

window.onload = function () {

    //ranking slide作成
    for (let i = 1; i < cnt; i++) {

        $('#ranking__row').append(
            '<div class="rankings ranking__' + i + '">'
            + '<div class="card mb-4 shadow-sm">'
            + '<img src="images/thumbnail/ranking_' + i + '.png" class="card-img-top ranking__cards">'
            + '<div class="card-body ranking__cards--body">'
            + '<h5 class="card-text">' + i + '位</h5>'
            + '<h6 class="card-text"><b>映画タイトル</b></h6>'
            + '</div>'
            + '</div>'
            + '</div>'
        );

    }

}



let row__left = 0;
const row = $('#ranking__row');

//RANKING 右矢印クリック時動作
$('#ranking__arrow--right').on('click', function () {

    const rankings__size = $(".rankings").outerWidth(true);

    if (row__left < -552) {

        $(row).animate({
            left: 0
        });

        row__left = 0;

    } else {

        row__left -= rankings__size;

        $(row).animate({
            left: row__left
        });

    }

});

//RANKING 左矢印クリック時動作
$('#ranking__arrow--left').on('click',function () {

    const rankings__size = $(".rankings").outerWidth(true);

    if (row__left > -345) {

        $(row).animate({
            left: -690
        });

        row__left = -690;

    } else {

        row__left += rankings__size;

        $(row).animate({
            left: row__left
        });

    }

});



