$(document).ready(function() {
    /* Calendar */
    function ini_events(ele) {
        ele.each(function() {
            // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
            // it doesn't need to have a start or end
            var eventObject = {
                title: $.trim($(this).text()), // use the element's text as the event title
            };

            // store the Event Object in the DOM element so we can get to it later
            $(this).data('eventObject', eventObject);

            // make the event draggable using jQuery UI
            $(this).draggable({
                zIndex: 1070,
                revert: true, // will cause the event to go back to its
                revertDuration: 0, //  original position after the drag
            });
        });
    }
    ini_events($('#external-events div.external-event'));

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    //Date for the calendar events (dummy data)
    var todayDate = moment().startOf('day');
    var YM = todayDate.format('YYYY-MM');
    var YESTERDAY = todayDate
        .clone()
        .subtract(1, 'day')
        .format('YYYY-MM-DD');
    var TODAY = todayDate.format('YYYY-MM-DD');
    var TOMORROW = todayDate
        .clone()
        .add(1, 'day')
        .format('YYYY-MM-DD');
    $('#calendar').fullCalendar({
        themeSystem: 'bootstrap4',
        displayEventTime: false,
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay',
        },
        buttonText: {
            prev: '',
            next: '',
            today: 'Today',
            month: 'Month',
            week: 'Week',
            day: 'Day',
        },
        //Random events
        events: [
            {
                title: 'All Day Event',
                start: YM + '-01',
                backgroundColor: '#67C5DF',
            },
            {
                title: 'Long Event',
                start: YM + '-07',
                end: YM + '-10',
                backgroundColor: '#418BCA',
            },
            {
                id: 999,
                title: 'Repeating Event',
                start: YM + '-09T16:00:00',
                backgroundColor: '#67C5DF',
            },
            {
                id: 999,
                title: 'Repeating Event',
                start: YM + '-16T16:00:00',
                backgroundColor: '#67C5DF',
            },
            {
                title: 'Conference',
                start: YESTERDAY,
                end: TOMORROW,
                backgroundColor: '#EF6F6C',
            },
            {
                title: 'Meeting',
                start: TODAY + 'T10:30:00',
                end: TODAY + 'T12:30:00',
                backgroundColor: '#EF6F6C',
            },
            {
                title: 'Lunch',
                start: TODAY + 'T12:00:00',
                backgroundColor: '#01BC8C',
            },
            {
                title: 'Meeting',
                start: TODAY + 'T14:30:00',
                backgroundColor: '#EF6F6C',
            },
            {
                title: 'Happy Hour',
                start: TODAY + 'T17:30:00',
                backgroundColor: '#418BCA',
            },
            {
                title: 'Dinner',
                start: TODAY + 'T20:00:00',
                backgroundColor: '#A9B6BC',
            },
            {
                title: 'Birthday Party',
                start: TOMORROW + 'T07:00:00',
                backgroundColor: '#A9B6BC',
            },
            {
                title: 'Click for Google',
                url: 'http://google.com/',
                start: YM + '-28',
                backgroundColor: '#418BCA',
            },
        ],
        eventClick: function(calEvent, jsEvent, view) {
            evt_obj = calEvent;
            $('#event_title').val(evt_obj.title);
            currColor = evt_obj.backgroundColor;
            colorChooser
                .css({
                    'background-color': evt_obj.backgroundColor,
                    'border-color': evt_obj.backgroundColor,
                })
                .html('Type <span class="caret"></span>');
            $('#evt_modal')
                .modal('show')
                .on('shown.bs.modal', function() {
                    $('#event_title').focus();
                })
                .on('hidden.bs.modal', function() {
                    evt_obj = '';
                });
            $('.text_save').on('click', function() {
                evt_obj.title = $('#event_title').val();
                evt_obj.backgroundColor = currColor;
                $('#calendar').fullCalendar('updateEvent', evt_obj);
                // setTimeout(setpopover,100);
            });
        },
        editable: true,
        eventLimit: true,
        droppable: true,
        drop: function(date, allDay) {
            // retrieve the dropped element's stored Event Object
            var originalEventObject = $(this).data('eventObject');

            // we need to copy it, so that multiple events don't have a reference to the same object
            var copiedEventObject = $.extend({}, originalEventObject);
            var $calendar_badge = $('.calendar_badge');
            // assign it the date that was reported
            copiedEventObject.start = date;
            copiedEventObject.allDay = allDay;
            copiedEventObject.backgroundColor = $(this).css('background-color');
            copiedEventObject.borderColor = $(this).css('border-color');

            $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
            $calendar_badge.text(parseInt($calendar_badge.text()) + 1);
            $('.event_count').text(parseInt($('.event_count').text()) + 1);
            // is the "remove after drop" checkbox checked?
            if ($('#drop-remove').is(':checked')) {
                $(this).remove();
            }
            // setpopover();
        },
        eventDrop: function() {
            // setTimeout(setpopover,100);
        },
        eventResize: function() {
            // setTimeout(setpopover,100);
        },
    });

    /* ADDING EVENTS */
    var defaultColor = '#A9B6BC';
    var lettercolor = '#fff'; //default
    $('#color-chooser-btn').css({ 'background-color': defaultColor, color: lettercolor });
    //Color chooser button
    var colorChooser = $('.color-chooser');
    $('.reset').on('click', function() {
        $('#new-event').val('');
    });
    $('#color-chooser > li > a').click(function(e) {
        e.preventDefault();
        var colorChooser = $(this)
            .closest('.input-group-btn')
            .find('.color-chooser');

        //Save color
        currColor = $(this).css('background-color');
        //Add color effect to button
        colorChooser
            .css({
                'background-color': currColor,
                'border-color': currColor,
            })
            .html($(this).text() + ' <span class="caret"></span>');
    });
    $('#add-new-event').click(function(e) {
        e.preventDefault();
        //Get value and make sure it is not null
        var val = $('#new-event').val();
        var currColor = $('#color-chooser-btn').css('background-color');
        var r = val.trim(' ');
        if (r.length == 0) {
            return;
        }

        //Create event
        var event = $('<div />');
        event
            .css({
                'background-color': currColor,
                'border-color': currColor,
                color: '#fff',
            })
            .addClass('external-event');
        event
            .html(val)
            .append(
                '<i class="fa fa-times event-clear" aria-hidden="true" style="margin-left: 3px;"></i>'
            );
        $('#external-events').prepend(event);
        //Add draggable funtionality
        ini_events(event);
    });
    //Remove event from text input
    $('.createevent_btn').on('click', function() {
        $('#new-event').val(' ');
    });
    $(document).on('click', '.event-clear', function() {
        $(this)
            .closest('div')
            .remove();
    });
});
$('input[type="checkbox"].custom-checkbox').iCheck({
    checkboxClass: 'icheckbox_minimal-blue',
    increaseArea: '20%',
});

function setpopover() {
    $('.fc-month-view')
        .find('.fc-event-container a')
        .each(function() {
            $(this).popover({
                placement: 'top',
                html: true,
                content: $(this).text(),
                trigger: 'hover',
            });
        });
    $('.fc-month-button').on('click', function() {
        $('.fc-event-container a').each(function() {
            $(this).popover({
                placement: 'top',
                html: true,
                content: $(this).text(),
                trigger: 'hover',
            });
        });
        return false;
    });
}
$('.fc-center')
    .find('h2')
    .css('font-size', '18px');
// setpopover();
$('.fc-button-group button,.fc-today-button').removeClass('fc-state-default');
