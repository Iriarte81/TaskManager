$(function() {
    $(".f-c1").focusin(highlight).focusout(highlight2);
    $(".f-c2").focusin(highlight).focusout(highlight2);
    $(".f-c3").focusin(highlight).focusout(highlight2);
    $('[data-toggle="tooltip"]').tooltip();

});

function highlight(evt) {
    $(this).addClass("highlighted81");
}

function highlight2(evt) {
    $(this).removeClass("highlighted81");
}
