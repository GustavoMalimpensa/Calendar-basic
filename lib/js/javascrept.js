(function(win, doc){
    'use strict';

    //calendario do FullCalendar
    let calendarEl=doc.querySelector('.calendar');
    let calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth'
    });
    calendar.render();
 
})(window, document);     