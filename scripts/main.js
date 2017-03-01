"use strict";

/* MENU DÉROULANT */
$ (document).ready(function(){
    $('nav a.mobile_menu').on('click', function() {

        var currentNAvHeight = $('nav').height();

        if( currentNAvHeight < 5){

            var newNavHeight = $('nav > ul').height() + 51;
            $('nav').animate({'height': newNavHeight + 'px'}, 750);
        }else {
            $('nav').animate({'height':'0px'}, 750, function () {
                $(this).removeAttr('style');
            });
        }

    });

    $(window).resize(function(){

        if ( $(this).width() > 625) {
            $('nav').removeAttr('style');
        }

    });

});





var $grid_demo_resize = $('#masonry_hybrid_demo3');
var grid3 = new MasonryHybrid($grid_demo_resize, {col: 3, space: 10});

// Use resize
var grid_resize = grid3.resize({
    celHeight 	: 180,
    sizeMap 	: [[2,1],[1,1],[1,1],[1,1],[1,1],[1,1],[1,1],[1,1]],
    resize 		: true,
});

// Get Size Map
grid_resize.getSizeMap();

// Set Size Map & apply Size Map
grid_resize.setSizeMap([[2,2]]).applySize();

// Filter
grid3.grid.isotope({ filter: "filterValue" });