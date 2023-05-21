$(document).ready(function() {
    $(document).on('click', '.card-heading .removepanel', function() {
        var $this = $(this);
        $this.parents('.card').hide('slow');
    });
    //panel hide
    $('.showhide').attr('title', 'Hide Panel content');
    $(document).on('click', '.card-heading .clickable', function(e) {
        var $this = $(this);
        if (!$this.hasClass('card-collapsed')) {
            $this
                .parents('.card')
                .find('.card-body')
                .slideUp();
            $this.addClass('card-collapsed');
            $this
                .find('i')
                .removeClass('fa-chevron-up')
                .addClass('fa-chevron-down');
            $('.showhide').attr('title', 'Show Panel content');
        } else {
            $this
                .parents('.card')
                .find('.card-body')
                .slideDown();
            $this.removeClass('card-collapsed');
            $this
                .find('i')
                .removeClass('fa-chevron-down')
                .addClass('fa-chevron-up');
            $('.showhide').attr('title', 'Hide Panel content');
        }
    });
    var elem = document.querySelector('.js-switch2');
    var init = new Switchery(elem, {
        size: 'big',
        color: '#418bca',
    });
    // end of switchery's.

    $.each($('.make-switch'), function() {
        $(this).bootstrapSwitch({
            onText: $(this).data('onText'),
            offText: $(this).data('offText'),
            onColor: $(this).data('onColor'),
            offColor: $(this).data('offColor'),
            size: $(this).data('size'),
            labelText: $(this).data('labelText'),
            state: $(this).data('checked'),
        });
    });
    $(function() {
        $("[data-toggle='popover']").popover();
    });

    $(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
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
