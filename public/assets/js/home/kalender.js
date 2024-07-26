
    document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendars');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        themeSystem: 'bootstrap5',
        editable: false,
        timeZone: 'ID',
        headerToolbar: {
        right: 'today,prev,next',
        left: 'title',
        },
        dayMaxEvents: false, // when too many events in a day, show the popover
        events: '/events',
        eventColor: '#17a2b8'
    });

    calendar.render();
    });
