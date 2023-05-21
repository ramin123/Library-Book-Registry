$(document).ready(function() {
    $('#example_1').ionRangeSlider({
        min: 0,
        max: 5000,
        type: 'double',
        prefix: '$',
        maxPostfix: '+',
        prettify: false,
        hasGrid: true,
        skin: 'modern',
    });
    $('#example_2').ionRangeSlider({
        min: 1000,
        max: 100000,
        from: 30000,
        to: 90000,
        type: 'double',
        step: 500,
        postfix: ' &euro;',
        hasGrid: true,
        skin: 'modern',
    });
    $('#example_3').ionRangeSlider({
        min: 0,
        max: 10,
        type: 'single',
        step: 0.1,
        postfix: ' carats',
        prettify: false,
        hasGrid: true,
        skin: 'modern',
    });
    $('#example_4').ionRangeSlider({
        min: -50,
        max: 50,
        from: 0,
        type: 'single',
        step: 1,
        postfix: '°',
        prettify: false,
        hasGrid: true,
        skin: 'modern',
    });
    $('#example_5').ionRangeSlider({
        values: [
            'January',
            'February',
            'March',
            'April',
            'May',
            'June',
            'July',
            'August',
            'September',
            'October',
            'November',
            'December',
        ],
        type: 'single',
        hasGrid: true,
        skin: 'modern',
    });
    $('#example_6').ionRangeSlider({
        min: 10000,
        max: 100000,
        step: 100,
        type: 'double',
        postfix: ' light years',
        from: 55000,
        hideMinMax: false,
        hideFromTo: true,
        skin: 'modern',
    });
    $('#example_7').ionRangeSlider({
        min: 10000,
        max: 100000,
        step: 100,
        postfix: ' light years',
        from: 55000,
        hideMinMax: true,
        hideFromTo: false,
        skin: 'modern',
    });
    $('#example_8').ionRangeSlider({
        min: 1000000,
        max: 100000000,
        type: 'double',
        postfix: ' р.',
        step: 10000,
        from: 25000000,
        to: 35000000,
        skin: 'modern',
        onChange: function(obj) {
            delete obj.input;
            delete obj.slider;
            var t = 'Range Slider value: ' + JSON.stringify(obj, '', 2);
            $('#result').html(t);
        },
        onLoad: function(obj) {
            delete obj.input;
            delete obj.slider;
            var t = 'Range Slider value: ' + JSON.stringify(obj, '', 2);
            $('#result').html(t);
        },
    });

    $('#updateLast').on('click', function() {
        $('#example_8').ionRangeSlider('update', {
            min: Math.round(10000 + Math.random() * 40000),
            max: Math.round(200000 + Math.random() * 100000),
            step: 1,
            from: Math.round(40000 + Math.random() * 40000),
            to: Math.round(150000 + Math.random() * 80000),
        });
    });
    /* Example 1 */
    $('#ex1,#ex2,#ex4,#ex9,#ex10,#ex8').bootstrapSlider({});

    /* Example 3 */
    var RGBChange = function() {
        $('#RGB').css(
            'background',
            'rgb(' + r.getValue() + ',' + g.getValue() + ',' + b.getValue() + ')'
        );
    };

    var r = $('#R')
        .bootstrapSlider()
        .on('slide', RGBChange)
        .data('bootstrapSlider');
    var g = $('#G')
        .bootstrapSlider()
        .on('slide', RGBChange)
        .data('bootstrapSlider');
    var b = $('#B')
        .bootstrapSlider()
        .on('slide', RGBChange)
        .data('bootstrapSlider');

    /* Example 5 */
    $('#ex5').bootstrapSlider();
    $('#destroyEx5Slider').click(function() {
        $('#ex5').bootstrapSlider('destroy');
        $('#destroyEx5Slider').prop('disabled', true);
    });

    /* Example 6 */
    $('#bootstrap_slider6').bootstrapSlider();
    $('#bootstrap_slider6').on('slide', function(slideEvt) {
        $('#ex6SliderVal').text(slideEvt.value);
    });
    $('#ex13').bootstrapSlider({
        step: 20000,
        min: 0,
        max: 200000,
    });

    $('#ex7').bootstrapSlider();
    $('#ex7-enabled').click(function() {
        if (this.checked) {
            $('#ex7').bootstrapSlider('enable');
            $('#enable_text').text('Disable');
            $('#slider_enabled').text('Enabled Slider');
        } else {
            $('#ex7').bootstrapSlider('disable');
            $('#enable_text').text('Enable');
            $('#slider_enabled').text('Disabled Slider');
        }
    });
    $('#ex20a').on('click', function(e) {
        $('#ex20a')
            .parent()
            .find(' >.well')
            .toggle()
            .find('input')
            .bootstrapSlider('relayout');
        e.preventDefault();
    });
    $('#ex12').bootstrapSlider();

    $('#ex12_Refresh').on('click', function(e) {
        e.preventDefault();

        $('#ex12').bootstrapSlider('refresh');
    });
});
$(document).ready(function() {
    $('.tooltip')
        .addClass('tooltip-top')
        .removeClass('top');
    $('.slider').on('mouseenter mouseleave', function() {
        $(this)
            .find('.tooltip.tooltip-main')
            .toggleClass('show')
            .removeClass('in');
    });
});
