smoothScroll.init({
        speed: 850,
    easing: 'easeInOutQuad',
    });
$('#client-scroller').simplyScroll();

$('#diagModalBtn').on('click', function(e) {
    e.preventDefault();
    $('#diagModal').modal();
});

new WOW().init();
