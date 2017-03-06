"use strict";

/* MENU DÉROULANT */
$(document).ready(function () {
    $('nav a.mobile_menu').on('click', function () {

        var currentNAvHeight = $('nav').height();

        if (currentNAvHeight < 5) {

            var newNavHeight = $('nav > ul').height() + 51;
            $('nav').animate({'height': newNavHeight + 'px'}, 750);
        } else {
            $('nav').animate({'height': '0px'}, 750, function () {
                $(this).removeAttr('style');
            });
        }

    });

    $(window).resize(function () {

        if ($(this).width() > 625) {
            $('nav').removeAttr('style');
        }

    });


    /* focus sur 1er champs en erreur formulaire */
    $(".error:first").focus();


});

