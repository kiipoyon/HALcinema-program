let cnt = 6;
let s_cnt = 4;
const now = new Date();
let y = now.getFullYear();
let m = now.getMonth() + 1;
let d = now.getDate();
let w = now.getDay();
let wd = ['日', '月', '火', '水', '木', '金', '土'];
let date;

let hidden_date = y + '/' + m + '/' + d;

const movies = $('.movies');

$(window).on('load', function () {
    $('#date').text(hidden_date);

    //schedule日付
    for (let i = 0; i < cnt; i++) {
        d = now.getDate() + i;
        date = m + '/' + d;
        hidden_date = y + '/' + m + '/' + d;

        $('#schedule_date').append(
            '<div class="rect rects' +
                i +
                ' flex_cont" onclick="date_click(this)">' +
                '<input value="movie_' +
                i +
                '" hidden="true">' +
                '<div class="date_box">' +
                '<h1 class="date">' +
                date +
                '</h1>' +
                '<h3 class="date_wd">' +
                '(' +
                wd[w] +
                ')' +
                '</h3>' +
                '<input hidden="true" value="' +
                hidden_date +
                '">' +
                '</div>' +
                '</div>'
        );
        w++;
        if (w === 7) {
            w = 0;
        }
        if (i === 0) {
            $('.rect').addClass('active');
        }
    }

    //作品上映時間
    for (let i = 0; i < s_cnt; i++) {
        $('.movie_times').append(
            '<a href="ticket_seat.php" class="ticket_a"><div class="theater_movie">' +
                '<p class="times time' +
                i +
                '">13:00</p>' +
                '<p class="times_end">~14:30</p>' +
                '<div class="times_ticket">' +
                '<div class="minus"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">\n' +
                '  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>\n' +
                '</svg></div>' +
                '<p>販売中</p>' +
                '</div>' +
                '</div></a>'
        );
    }

    const act = $('.active').position().left;
    const rec = $('.rects3').position().left;
});

//arrow
//arrow left動作
const date_cont = $('#schedule_date');
let date_position = parseInt($(date_cont).css('left'));
let max_left = 602 * (cnt - 2);
let active;

$('#arrow-left').on('click', function () {
    active = $('.active');

    if (date_position === 0) {
    } else {
        date_position += 193;
        $('#schedule_date').animate(
            {
                left: date_position,
            },
            400
        );
        $(active).prev().addClass('active');
        $(active).removeClass('active');
    }

    active = $('.active');
    const act_child = $('.active').children('.date_box').children('input');
    hidden_date = $(act_child).val();

    $('#date').text(hidden_date);

    const s_v = $(active).children('input').val();
    console.log(s_v);
    if (s_v === 'movie_1') {
        $(movies).removeAttr('hidden');
    } else if (s_v === 'movie_2') {
        $(movies).removeAttr('hidden');
        $(movies).not('#movie_01, #movie_02').attr('hidden', 'true');
    } else if (s_v === 'movie_3') {
        $(movies).removeAttr('hidden');
        $(movies).not('#movie_02').attr('hidden', 'true');
    } else if (s_v === 'movie_4') {
        $(movies).removeAttr('hidden');
        $(movies).not('#movie_03').attr('hidden', 'true');
    } else {
        $(movies).removeAttr('hidden');
    }
});
//arrow right
$('.arrow_right').on('click', function () {
    active = $('.active');

    if (date_position < -max_left) {
    } else {
        date_position -= 193;
        $('#schedule_date').animate(
            {
                left: date_position,
            },
            400
        );
        $(active).next().addClass('active');
        $(active).removeClass('active');
    }

    active = $('.active');
    const act_child = $('.active').children('.date_box').children('input');
    hidden_date = $(act_child).val();

    $('#date').text(hidden_date);

    const s_v = $(active).children('input').val();
    console.log(s_v);
    if (s_v === 'movie_1') {
        $(movies).removeAttr('hidden');
    } else if (s_v === 'movie_2') {
        $(movies).removeAttr('hidden');
        $(movies).not('#movie_01, #movie_02').attr('hidden', 'true');
    } else if (s_v === 'movie_3') {
        $(movies).removeAttr('hidden');
        $(movies).not('#movie_02').attr('hidden', 'true');
    } else if (s_v === 'movie_4') {
        $(movies).removeAttr('hidden');
        $(movies).not('#movie_03').attr('hidden', 'true');
    } else {
        $(movies).removeAttr('hidden');
    }
});

/* 日付クリック動作 */
function date_click(self) {
    active = $('.active');

    if ($(self).hasClass('active')) {
    } else {
        $(active).removeClass('active');

        $(self).addClass('active');

        const act = $(active).position().left;
        const rec = $(self).position().left;

        let rec_act = rec - act;

        date_position -= rec_act;

        $('#schedule_date').animate({
            left: date_position,
        });

        const act_child = $('.active').children('.date_box').children('input');
        hidden_date = $(act_child).val();

        $('#date').text(hidden_date);

        const s_v = $(self).children('input').val();
        if (s_v === 'movie_1') {
            $(movies).removeAttr('hidden');
        } else if (s_v === 'movie_2') {
            $(movies).removeAttr('hidden');
            $(movies).not('#movie_01, #movie_02').attr('hidden', 'true');
        } else if (s_v === 'movie_3') {
            $(movies).removeAttr('hidden');
            $(movies).not('#movie_02').attr('hidden', 'true');
        } else if (s_v === 'movie_4') {
            $(movies).removeAttr('hidden');
            $(movies).not('#movie_03').attr('hidden', 'true');
        } else {
            $(movies).removeAttr('hidden');
        }
    }
}

/* 作品select */
$('[name=theater_select]').on('change', function () {
    const selected_val = $('[name=theater_select] option:selected').val();

    if (selected_val === 'none') {
        $(movies).removeAttr('hidden');
    } else if (selected_val === '1') {
        console.log(selected_val);
        $(movies).removeAttr('hidden');
        $(movies).not('#movie_01').attr('hidden', 'true');
    } else if (selected_val === '2') {
        $(movies).removeAttr('hidden');
        $(movies).not('#movie_02').attr('hidden', 'true');
    } else if (selected_val === '3') {
        $(movies).removeAttr('hidden');
        $(movies).not('#movie_03').attr('hidden', 'true');
    }
});
