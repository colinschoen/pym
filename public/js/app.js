smoothScroll.init({
        speed: 850,
    easing: 'easeInOutQuad',
    });
$('#client-scroller').simplyScroll();

$('#diagModalBtn').on('click', function(e) {
    e.preventDefault();
    $('#diagModal').modal();
});

$('#coachModalBtn').on('click', function(e) {
    e.preventDefault();
    $('#coachModal').modal();
});

$('#manageModalBtn').on('click', function(e) {
    e.preventDefault();
    $('#manageModal').modal();
});

new WOW().init();
