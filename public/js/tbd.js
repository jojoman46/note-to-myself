$('#construct')
    .focus(function() { $(this).css("background", "black") })
    .blur(function() { if ($(this)[0].value == '') { $(this).css("background", "url('../images/broken.JPG') center center no-repeat") } });