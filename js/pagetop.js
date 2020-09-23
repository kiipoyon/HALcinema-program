//PAGE　TOP　動作
$(function() {

    const topBtn = $('#page__top')
    const topBtn__p = $('#page__top p');
    const topBtn__div = $('#page__top div');
    const topBtn__i = $('#page__top i');


    let showFlag = false;
    //スクロールが100に達したらボタン表示
    $(window).on( 'scroll',function () {
        if ($(this).scrollTop() > 300) {
            if (showFlag === false) {
                showFlag = true;
                topBtn__p.stop().animate({'bottom' : '15px'}, 200);
                topBtn__div.stop().animate({'bottom' : '20px'}, 200);
                topBtn__i.stop().animate({'bottom' : '23px'}, 200);
            }
        } else {
            if (showFlag) {
                showFlag = false;
                topBtn__p.stop().animate({'bottom' : '-100px'}, 200);
                topBtn__div.stop().animate({'bottom' : '-100px'}, 200);
                topBtn__i.stop().animate({'bottom' : '-100px'}, 200);
            }
        }
    });
    //スクロールしてトップ
    topBtn.on('click', function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});