$(document).ready(function() {
    $('#search').on('keyup', function() {
        var icon = $(this)
            .val()
            .toLowerCase();
        $('#fa-icons li').each(function() {
            var find = $(this).attr('data-original-title');
            if (find) {
                var show = find.toLowerCase();
            }
            if (show) {
                var num = show.indexOf(icon);
                if (num !== -1) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            }
        });
    });

    $('#search1').on('keyup', function() {
        var icon1 = $(this)
            .val()
            .toLowerCase();
        $('#ionicons li').each(function() {
            var find1 = $(this).attr('data-original-title');
            if (find1) {
                var show1 = find1.toLowerCase();
            }
            if (show1) {
                var num1 = show1.indexOf(icon1);
                if (num1 !== -1) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            }
        });
    });

    $('#search2').on('keyup', function() {
        var icon2 = $(this)
            .val()
            .toLowerCase();
        $('#lineicons li').each(function() {
            var find2 = $(this).attr('data-original-title');
            if (find2) {
                var show2 = find2.toLowerCase();
            }
            if (show2) {
                var num2 = show2.indexOf(icon2);
                if (num2 !== -1) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            }
        });
    });
    $('.card .card-header .clickable1').click(function() {
        $(this)
            .closest('.card-header')
            .next()
            .toggle('slow');
    });
});
