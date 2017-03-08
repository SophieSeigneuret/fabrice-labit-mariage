"use strict";

$(document).ready(function () {
    $('sortable').sortable({
        start: function(event, ui) {
            ui.item.data('start_pos', ui.item.index());
            console.log('start', ui);
        },
        stop: function(event, ui) {
            var start_pos = ui.item.data('start_pos');
            if (start_pos != ui.item.index()) {
                // the item got moved
            } else {
                // the item was returned to the same position
            }
            console.log('stop', ui);

        },
        update: function(event, ui) {
            $.post('/reorder', $(selector).sortable('serialize'))
                .done(function() {
                    alert('Updated')
                });
            console.log('update', ui);

        }
    });

});

