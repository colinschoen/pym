smoothScroll.init({
        speed: 850,
    easing: 'easeInOutQuad',
    });
$('#client-scroller').simplyScroll();

$('#diagModalBtn').on('click', function() {
    alert("launch modal");
    $('#diagModal').modal();
});

new WOW().init();
