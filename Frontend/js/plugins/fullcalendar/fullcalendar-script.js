
  $(document).ready(function() {

    /* initialize the calendar
    -----------------------------------------------------------------*/

    var $calendar =  $('#calendar').fullCalendar();

      $calendar.header = {
        title: 'Calendar',
        left: 'prev,next today',
        center: 'title',
        right: 'month,basicWeek,basicDay'
      };
      $calendar.defaultDate = function () {
          var date=new Date();
          return date.getDate()+"-"+(date.getMonth()+1)+"-"+date.getFullYear();
      }

      $calendar.misc = {
          editable: true,
          droppable: true, // this allows things to be dropped onto the calendar
          eventLimit: true, // allow "more" link when too many events
      }

      /*$calendar.events = function () {
          //if admin -> get admin events
          //if not admin get specific user events
          //if lever clicked load all calendar events, on this month
      }*/



      $calendar.events= [
        {
          title: 'All Day Event',
          start: '2015-05-01',
          color: '#9c27b0'
        },
        {
          title: 'Long Event',
          start: '2015-05-07',
          end: '2015-05-10',
          color: '#e91e63'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2015-05-09T16:00:00',
          color: '#ff1744'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2015-05-16T16:00:00',
          color: '#aa00ff'
        },
        {
          title: 'Conference',
          start: '2015-05-3',
          end: '2015-05-5',
          color: '#01579b'
        },
        {
          title: 'Meeting',
          start: '2015-05-12T10:30:00',
          end: '2015-05-12T12:30:00',
          color: '#2196f3'
        },
        {
          title: 'Lunch',
          start: '2015-05-12T12:00:00',
          color: '#ff5722'
        },
        {
          title: 'Meeting',
          start: '2015-05-12T14:30:00',
          color: '#4caf50'
        },
        {
          title: 'Happy Hour',
          start: '2015-05-12T17:30:00',
          color: '#03a9f4'
        },
        {
          title: 'Dinner',
          start: '2015-05-12T20:00:00',
          color: '#009688'
        },
        {
          title: 'Birthday Party',
          start: '2015-05-13T07:00:00',
          color: '#00bcd4'
        }
      ]


    
  });