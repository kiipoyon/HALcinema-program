var z_cnt = 40;

$(window).on('load', function(){
    for (let i = 0; i < z_cnt; i++){

        var zaseki_i = i + 1 ;

        $('#box').append(
            '<div class="box-child child' + zaseki_i + '" onclick="box_c(this)">' +
            '<p>' + zaseki_i + '</p>' +
            '</div>'
        );
    }
    
    $('#zaseki_flexbox').css('display', 'flex');
});

function box_c(self){
    
    let act = $('.active');
    if (act.length > 7){

        if ($(self).hasClass('active')){
            $(self).removeClass('active');
        }else {
            swal("選択された座席が上限を超えています");
        }
    
    }else{

        if ($(self).hasClass('active')){
            $(self).removeClass('active');
        }else{
            $(self).addClass('active');
        }
        
    }
           
    act = $('.active');
    act_h = [];
    act_h2 = [];
    for (let i = 0; i < act.length; i++) {
        act_h[i] = $(act[i]).text() + "番";
        act_h2[i] = $(act[i]).text();
    }
    
    $("#zaseki_cnt").text(act.length);
    
    if (act.length === 0) {
        $('#zaseki_bng').text("※ココに選択した座席番号表示※");
    } else {
        $("#zaseki_bng").text(act_h);
        $("#zaseki_count").val(act_h2);
    }
    
    act_k = act.length * "1800";
    
    $('.total').text(act_k + "円");
    $('#zaseki_inp').val(act_k + "円");

}