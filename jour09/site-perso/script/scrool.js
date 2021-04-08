var scroller = new LocomotiveScroll({
 
    el: document.querySelector('[data-scroll-container]'),
    smooth: true
});


$(window).resize(function(e) {

    setTimeout(function(){  scroller.update();
        //DeltaY of 1 so event is effectively triggered
        var wheelEvent = new WheelEvent("mousewheel",{deltaY:1}); 
        //Element selector used for locomotivePlugin
        $("body")[0].dispatchEvent(wheelEvent);
        //TO DO Trigger events for touch and ms touch events (touchmove, MSPointerMove)
    }, 100);
   
});

const slider = document.querySelector('#link_about');

$('#li_about').on('click', function() {
    scroller.scrollTo(slider) ;  
});

const slider2 = document.querySelector('#link_header');

$('#li_accueil').on('click', function() {
    scroller.scrollTo(slider2) ;  
});

const slider3 = document.querySelector('#link_portfolio');

$('#li_portfolio').on('click', function() {
    scroller.scrollTo(slider3) ;  
});

const slider4 = document.querySelector('#link_contact');

$('#li_contact').on('click', function() {
    scroller.scrollTo(slider4) ;  
});

const slider5 = document.querySelector('#link_portfolio');

$('.btn_mon_travail').on('click', function() {
    scroller.scrollTo(slider5) ;  
});





