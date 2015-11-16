$('#settings-toggle').on('click', function(){
    $('#settings').toggle();
});

$('#set-color').on('click', function(){
    $('body').css('background-color', $('#colorBG').val());
    $('body').css('color', $('#colorFG').val());
});