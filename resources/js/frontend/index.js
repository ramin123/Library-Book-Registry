// skills sliders
$(document).ready(function() {
    new WOW().init();
    $('#myStat3').circliful();
    $('#myStat4').circliful();
    $('#myStat5').circliful();
    $('#myStat6').circliful();
    //accordians tab panels toggle buttons
    $('.collapse')
        .on('shown.bs.collapse', function() {
            $(this)
                .parent()
                .find('.fa-plus')
                .removeClass('fa-plus')
                .addClass('fa-minus');
        })
        .on('hidden.bs.collapse', function() {
            $(this)
                .parent()
                .find('.fa-minus')
                .removeClass('fa-minus')
                .addClass('fa-plus');
        });
});
