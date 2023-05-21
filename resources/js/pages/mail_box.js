$(document).ready(function() {
    $('input').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass: 'iradio_minimal-blue',
        increaseArea: '20%', // optional,
        // handle: 'checkbox',
        // cursor:true,
    });
    $('.icheck').on('ifChecked', function(event) {
        $('input').iCheck('check');
    });
    $('.icheck').on('ifUnchecked', function(event) {
        $('input').iCheck('uncheck');
    });
    $('.rating .starred').on('click', function() {
        $(this).toggleClass('text-warning');
        $(this).toggleClass('starred');
    });
    $('.mark_as_star').on('click', function() {
        $('.mail_inbox_all tr td .rating .fa-star').each(function() {
            if ($(this).hasClass('text-warning')) {
                $(this)
                    .closest('tr')
                    .addClass('unstar_background');
                $(this)
                    .closest('tr')
                    .find('.icheckbox_minimal-blue')
                    .addClass('checked');
            } else {
                $(this)
                    .closest('tr')
                    .find('.icheckbox_minimal-blue')
                    .removeClass('checked');
                $(this)
                    .closest('tr')
                    .removeClass('unstar_background');
            }
        });
    });
    $('.mark_as_unstar').on('click', function() {
        $('.mail_inbox_all tr td .rating .fa-star').each(function() {
            if ($(this).hasClass('text-warning')) {
                $(this)
                    .closest('tr')
                    .removeClass('unstar_background');
                $(this)
                    .closest('tr')
                    .find('.icheckbox_minimal-blue')
                    .removeClass('checked');
            } else {
                $(this)
                    .closest('tr')
                    .addClass('unstar_background');
                $(this)
                    .closest('tr')
                    .find('.icheckbox_minimal-blue')
                    .addClass('checked');
            }
        });
    });
    $('.mark_as_read').on('click', function() {
        console.log('hello');
        $('.mail_inbox_all tr td.read_td input').each(function() {
            if ($(this).hasClass('read')) {
                $(this)
                    .closest('tr')
                    .addClass('unstar_background');
                $(this)
                    .closest('tr')
                    .find('.icheckbox_minimal-blue')
                    .addClass('checked');
            } else {
                $(this)
                    .closest('tr')
                    .removeClass('unstar_background');
            }
        });
    });
    $('.mark_as_unread').on('click', function() {
        $('.mail_inbox_all tr td.read_td input').each(function() {
            if ($(this).hasClass('unread')) {
                $(this)
                    .closest('tr')
                    .addClass('unstar_background');
                $(this)
                    .closest('tr')
                    .find('.icheckbox_minimal-blue')
                    .addClass('checked');
            } else {
                $(this)
                    .closest('tr')
                    .removeClass('unstar_background');
                $(this)
                    .closest('tr')
                    .find('.icheckbox_minimal-blue')
                    .removeClass('checked');
            }
        });
    });

    $('.mail_inbox_all tr td [type="checkbox"]').on('ifChanged', function() {
        var chkall = 0;
        $('.mail_inbox_all tr td [type="checkbox"]').each(function() {
            if (
                $(this)
                    .closest('tr')
                    .find('.mail-checkbox')
                    .hasClass('checked')
            ) {
            } else {
                chkall = 1;
                return;
            }
        });
        if (chkall == 1) {
            $('.select_all_mail').addClass('checked');
        } else {
            $('.select_all_mail').removeClass('checked');
        }
    });
    $('.all').on('click', function() {
        $('input').iCheck('check');
    });
});
