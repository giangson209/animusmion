if($(window).innerWidth() >= 1024){
    history.scrollRestoration = "manual";
    $(window).on('beforeunload', function(){
        $(window).scrollTop(0);
    });
    const lenis = new Lenis({
        duration: 1.2,
    })
    function raf(time) {
        lenis.raf(time);
        ScrollTrigger.update();
        requestAnimationFrame(raf)
    }
    requestAnimationFrame(raf)
}

history.scrollRestoration = "manual";
$(window).on('beforeunload', function(){
    $(window).scrollTop(0);
});

AOS.init({
    duration: 1200,
})

$(".clc-menu").click(function(){
    $(this).toggleClass('active');
    $('.nav-menu').slideToggle(400);
});