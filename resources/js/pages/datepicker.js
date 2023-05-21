$('#daterange1').daterangepicker({
    locale: {
        format: 'MM/DD/YYYY',
    },
});
$('#daterange2').daterangepicker({
    timePicker: true,
    timePickerIncrement: 1,
    locale: {
        format: 'MM/DD/YYYY h:mm A',
    },
});

function cb(start, end) {
    $('#daterange3 span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
}
cb(moment().subtract(29, 'days'), moment());

$('#daterange3').daterangepicker(
    {
        ranges: {
            Today: [moment(), moment()],
            Yesterday: [moment().subtract(1, 'days'), moment()],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [
                moment()
                    .subtract(1, 'month')
                    .startOf('month'),
                moment()
                    .subtract(1, 'month')
                    .endOf('month'),
            ],
        },
    },
    cb
);

$('#rangepicker4').daterangepicker({
    singleDatePicker: true,
    showDropdowns: true,
});

// datetimepicker

$('#datetime1')
    .datetimepicker({
        format: 'LT',
        icons: {
            time: 'fa fa-clock-o',
            date: 'fa fa-calendar',
            up: 'fa fa-chevron-up',
            down: 'fa fa-chevron-down',
            previous: 'fa fa-chevron-left',
            next: 'fa fa-chevron-right',
        },
    })
    .parent()
    .css('position :relative');

$('#datetime2')
    .datetimepicker({
        format: 'LT',
        icons: {
            time: 'fa fa-clock-o',
            date: 'fa fa-calendar',
            up: 'fa fa-chevron-up',
            down: 'fa fa-chevron-down',
            previous: 'fa fa-chevron-left',
            next: 'fa fa-chevron-right',
        },
    })
    .parent()
    .css('position :relative');
$('#datetime3')
    .datetimepicker({
        viewMode: 'years',
        format: 'MM/YYYY',
        icons: {
            time: 'fa fa-clock-o',
            date: 'fa fa-calendar',
            up: 'fa fa-chevron-up',
            down: 'fa fa-chevron-down',
            previous: 'fa fa-chevron-left',
            next: 'fa fa-chevron-right',
        },
    })
    .parent()
    .css('position :relative');
$('#datetime4')
    .datetimepicker({
        viewMode: 'years',
        format: 'MM/YYYY',
        icons: {
            time: 'fa fa-clock-o',
            date: 'fa fa-calendar',
            up: 'fa fa-chevron-up',
            down: 'fa fa-chevron-down',
            previous: 'fa fa-chevron-left',
            next: 'fa fa-chevron-right',
        },
    })
    .parent()
    .css('position :relative');
$('#datetime5').datetimepicker({
    inline: true,
    sideBySide: true,
    icons: {
        time: 'fa fa-clock-o',
        date: 'fa fa-calendar',
        up: 'fa fa-chevron-up',
        down: 'fa fa-chevron-down',
        previous: 'fa fa-chevron-left',
        next: 'fa fa-chevron-right',
    },
});
//dtetime picker end

//clockface picker
$('#clockface1').clockface();

$('#clockface2').clockface();

$('#clockface3')
    .clockface({
        format: 'H:mm',
    })
    .clockface('show', '14:30');
//clockface picker end

//
// $(".bootstrap-datetimepicker-widget").on('click',function () {
//     $('.bootstrap-datetimepicker-widget .list-unstyled li').removeClass('collapse in');
//     $(".bootstrap-datetimepicker-widget li:nth-child(3)").addClass('show1');
// });
