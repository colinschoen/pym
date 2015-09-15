smoothScroll.init({
        speed: 850,
    easing: 'easeInOutQuad',
    });
$('#client-scroller').simplyScroll();

$('#diagModalBtn').on('click', function() {
    $('#diagModal').modal();
});

new WOW().init();
