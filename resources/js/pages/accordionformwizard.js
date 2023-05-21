function onNext(parent, card) {
    hash = '#' + card.id;
    $('.acc-wizard-sidebar', $(parent))
        .children('li')
        .children("a[href='" + hash + "']")
        .parent('li')
        .removeClass('acc-wizard-todo')
        .addClass('acc-wizard-completed');
}
$(window).load(function() {
    $('.acc-wizard').accwizard({
        onNext: onNext,
    });
});
