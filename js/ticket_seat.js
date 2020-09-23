$(window).on('load', function(){
    $('.next_btn').attr('disabled', 'disabled')
})

$('#kiyaku_btn').change(function() {
    
    if ($('#kiyaku_btn').prop('checked')) {
        $('.next_btn').removeAttr('disabled');
    }else {
        $('.next_btn').attr('disabled', 'disabled');
    }
    
})