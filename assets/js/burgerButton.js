$('.burger-button').on('click', function(e) {
    e.preventDefault();
    $(this).toggleClass('goto-cross').toggleClass('goto-burger');
});