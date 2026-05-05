"use strict";

var KTCalendarBasic = function() {

    return {
        //main function to initiate the module
        init: function() {
            var todayDate = moment().startOf('day');
            var YM = todayDate.format('YYYY-MM');
            var YESTERDAY = todayDate.clone().subtract(1, 'day').format('YYYY-MM-DD');
            var TODAY = todayDate.format('YYYY-MM-DD');
            var TOMORROW = todayDate.clone().add(1, 'day').format('YYYY-MM-DD');

            var calendarEl = document.getElementById('kt_calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],

                isRTL: KTUtil.isRTL(),
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    //right: 'dayGridMonth,timeGridWeek,timeGridDay'
                    right: 'dayGridMonth'
                },

                height: 800,
                contentHeight: 780,
                aspectRatio: 3,  // see: https://fullcalendar.io/docs/aspectRatio

                nowIndicator: true,
                now: TODAY + 'T09:25:00', // just for demo

              //  views: {
                  //  dayGridMonth: { buttonText: 'month' },
                  //  timeGridWeek: { buttonText: 'week' },
                  //  timeGridDay: { buttonText: 'day' }
              //  },

                defaultView: 'dayGridMonth',
                defaultDate: TODAY,

                editable: true,
                eventLimit: true, // allow "more" link when too many events
                navLinks: true,
                events: [
                    {
                        title: 'Sri Suhartini, SE',
                        start: YESTERDAY,
                        end: TOMORROW,
                        description: '<div class="kt-widget kt-widget--user-profile-4">	<div class="kt-widget__head"><div class="kt-widget__media"><img class="kt-widget__img kt-hidden-" src="../assets/media/users/100_16.jpg" alt="image"></div><div class="kt-widget__content text-center"><div class="kt-widget__section mb-3"><a href="#" class="kt-widget__username">Sri Suhartini,SE\
</a><span class="kt-badge kt-badge--danger kt-badge--inline">Kepala Seksi Administrasi Kepegawaian</span></div><span>Tanggal Perjalanan Dinas<br>23 Desember 2022 - 24 Desember 2022</br></span></div></div></div>',
                        className: "fc-event-brand"
                    }
                ],

                eventRender: function(info) {
                    var element = $(info.el);

                    if (info.event.extendedProps && info.event.extendedProps.description) {
                        if (element.hasClass('fc-day-grid-event')) {
                            element.data('content', info.event.extendedProps.description);
                            element.data('placement', 'top');
                            element.data('html', true);
                            KTApp.initPopover(element);
                        } else if (element.hasClass('fc-time-grid-event')) {
                            element.find('.fc-title').append('<div class="fc-description">' + info.event.extendedProps.description + '</div>');
                        } else if (element.find('.fc-list-item-title').lenght !== 0) {
                            element.find('.fc-list-item-title').append('<div class="fc-description">' + info.event.extendedProps.description + '</div>');
                        }
                    }
                }
            });

            calendar.render();
        }
    };
}();

jQuery(document).ready(function() {
    KTCalendarBasic.init();
});
