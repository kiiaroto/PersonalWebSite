// get the value of the bottom of the #main element by adding the offset of that element plus its height, set it as a variable
var mainbottom = $('#past-header').offset().top + $('#past-header').height();

// on scroll, 
$(window).on('scroll',function(){

    // we round here to reduce a little workload
    var stop = Math.round($(window).scrollTop());

    if (stop > mainbottom) {
        $('nav').addClass('past-header');
    } else {
        $('nav').removeClass('past-header');
    }

});