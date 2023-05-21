$("input[name='demo1']").TouchSpin({
    min: 0,
    max: 100,
    step: 0.1,
    decimals: 2,
    boostat: 5,
    maxboostedstep: 10,
    postfix: '%',
    postfix_extraclass: 'input-group-text',
});

$("input[name='demo2']").TouchSpin({
    min: -1000000000,
    max: 1000000000,
    stepinterval: 50,
    maxboostedstep: 10000000,
    prefix: '$',
    prefix_extraclass: 'input-group-text',
});

$("input[name='demo_vertical']").TouchSpin({
    verticalbuttons: true,
    verticalupclass: 'fa fa-plus',
    verticaldownclass: 'fa fa-minus',
});

$("input[name='demo_vertical2']").TouchSpin({
    verticalbuttons: true,
    verticalupclass: 'fa fa-plus',
    verticaldownclass: 'fa fa-minus',
});

$("input[name='demo3']").TouchSpin();

$("input[name='demo3_21']").TouchSpin({
    initval: 40,
});

$("input[name='demo3_22']").TouchSpin({
    initval: 40,
});

$("input[name='demo4']").TouchSpin({
    // postfix_extraclass: "btn btn-secondary"
    postfix: 'a button',
    postfix_extraclass: 'btn btn-secondary',
});

$("input[name='demo4_2']").TouchSpin({
    postfix_extraclass: 'input-group-text',
    postfix: 'a button',
    postfix_extraclass: 'btn btn-secondary',
});

$("input[name='demo5']").TouchSpin({
    prefix: 'pre',
    postfix: 'post',
    postfix_extraclass: 'input-group-text',
    prefix_extraclass: 'input-group-text',
});
$('#customize-spinner').spinner('changed', function(e, newVal, oldVal) {
    $('#old-val').text(oldVal);
    $('#new-val').text(newVal);
});

$(document).ready(function() {
    $('.bootstrap-touchspin-down')
        .parent()
        .addClass('input-group-prepend')
        .removeClass('input-group-btn');
    $('.bootstrap-touchspin-up')
        .parent()
        .addClass('input-group-append')
        .removeClass('input-group-btn');
});
