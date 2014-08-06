@extends('backend/_layout/layout')
@section('content')
{{ Notification::showAll() }}
{{ HTML::style('assets/backend/plugins/fullcalendar/css/fullcalendar.css') }}
{{ HTML::style('assets/backend/plugins/fullcalendar/css/fullcalendar.print.css') }}
{{ HTML::script('assets/backend/plugins/fullcalendar/js/jquery.min.js') }}
{{ HTML::script('assets/backend/plugins/fullcalendar/js/jquery-ui.custom.min.js') }}
{{ HTML::script('assets/backend/plugins/fullcalendar/js/fullcalendar.min.js') }}
{{ HTML::script('assets/backend/plugins/fullcalendar/js/jquery.lightbox_me.min.js') }}
<script>         
   $(document).ready(function() {         
    lightbox('Wird geladen');          
    setTimeout(function() {          
   closeLightbox();
   
    },290);   
   
    /* Draggable Anfang
    -----------------------------------------------------------------*/
   
    $('#external-events div.external-event').each(function() {
    
      // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
      // it doesn't need to have a start or end
      var eventObject = {
        title: $.trim($(this).text()) // use the element's text as the event title
      };
      
      // store the Event Object in the DOM element so we can get to it later
      $(this).data('eventObject', eventObject);  
    
      // make the event draggable using jQuery UI
      $(this).draggable({
   
        zIndex: 999,
        revert: true,      // will cause the event to go back to its
        revertDuration: 0  //  original position after the drag
      });
      
    });
   
   
    /* Draggable Ende
    -----------------------------------------------------------------*/
   
   
    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear(); 
   
   
    //Lade Start Variblen
   yearresult= localStorage.getItem('yearresult');         
   monthresult= localStorage.getItem('monthresult'); 
   
   
   
    //Abfrage ob Start Variablen vorhanden sind wenn nicht akutuelles Datum setzen  
   
        if(yearresult) { }  
        else 
          {   yearresult=y}
   
   
        if(  monthresult) { }  
        else 
          {  monthresult=m}
   
   
   
   
   // Kalender Start
    var calendar = $('#calendar').fullCalendar({
   
         
     //editable: true,
     header: {
      left: 'prev,next today',
      center: 'title',
     
     },
              
      //Lade Daten
      eventSources: [
   
                       {
                           url: 'events_calendar',
                           type: 'GET',
                           data: {},
                           error: function () {
                               alert('Es wird nichts geladen');
                           }
                       } 
      ],      
   
     // Parameter für den View      
   
   year: yearresult,
   month: monthresult,    
   
        
           
     
     // Convert the allDay from string to boolean
     eventRender: function(event, element, view) {
      if (event.allDay === 'true') {
       event.allDay = true;
      } else {
       event.allDay = false;
      }
   
     },    
   
   
   
    /* Mögliche Eingabe Anfang Für die Zukunft
    -----------------------------------------------------------------*/
   
     selectable: true,
     selectHelper: false,
   
     /*
     select: function(start, end, allDay) {
     var title = prompt('Event Title:');
     var url = prompt('Type Event url, if exits:');
     if (title) {
     var start = $.fullCalendar.formatDate(start, "yyyy-MM-dd HH:mm:ss");
     var end = $.fullCalendar.formatDate(end, "yyyy-MM-dd HH:mm:ss");
     $.ajax({
     url: ' add_events.php',
     data: 'title='+ title+'&start='+ start +'&end='+ end +'&url='+ url ,
     type: "POST",
     success: function(json) {
     alert('Added Successfully');
     }
     });
     calendar.fullCalendar('renderEvent',
     {
     title: title,
     start: start,
     end: end,
     allDay: allDay
     },
     true // make the event "stick"
     );
     }
     calendar.fullCalendar('unselect');
     },
   */
     
   
     /* Mögliche Eingabe ENDE
    -----------------------------------------------------------------*/
   
   
     
   /* Delete Anfang
    -----------------------------------------------------------------*/
     eventClick: function(event, date, allDay, jsEvent, view) {
   //  var yyyy = $.fullCalendar.formatDate(date,"yyyy");
   //  var MM = $.fullCalendar.formatDate(date,"MM"); 
   //  var startDate = new Date(date.getFullYear(), date.getMonth(), date.getDay(), 0, 0, 0).getTime();   
   var month = ($.fullCalendar.formatDate( event.start, 'MM' ))-1;        
   var year = ($.fullCalendar.formatDate( event.start, 'yyyy' ));
   
   
   var decision = confirm("Willst du diesen "+ event.title+ " löschen?");   
   if (decision==true) {
   $.ajax({
   type: "POST",
   url: "destroy_calendar",         
   data: "&id=" + event.id
   
   });
   
   
   
      // Alles löschen
   localStorage.clear();
   
   // Monat minus 1 weil Anfang 0 ist
   //  var monthplus=(m+1);
   
   // Setzen der Startvariblen für den richtigen View
   localStorage.setItem('yearresult', year);
   localStorage.setItem('monthresult', month);
   
   //console.log(month);
   
   
   // Lade View
   
   
   
   
   setTimeout(function() {
   location.reload();
   
   
   },150);
   
            $(function(){
                 new PNotify({     
                title: 'Hinweis',
                text: ''+ event.title+' wurde gelöscht',
                 type: 'danger',
                 
                mouse_reset: false
            });
                });
   
   
   
   } 
   
   else {
   
   
    //Hinweis Anfang
                $(function(){
                 new PNotify({     
                title: 'Hinweis',
                text: ''+ event.title+' wurde nicht gelöscht',
                 type: 'danger',
                mouse_reset: false
            });
                });
   
   
   
   }
   
         
   },
          
   
   
   /* Delete Ende
    -----------------------------------------------------------------*/
   
   
    /* Drop verschieben Anfang
    -----------------------------------------------------------------*/
   
   
     editable: true,
     eventDrop: function(event, delta) {
     var start = $.fullCalendar.formatDate(event.start, "yyyy-MM-dd HH:mm:ss");
     var end = $.fullCalendar.formatDate(event.end, "yyyy-MM-dd HH:mm:ss");
     $.ajax({



     url: 'update_calendar',
     data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,
     type: "POST",
     success: function(json) {
   
   
     // alert(' '+event.title +' wurde verschoben' );
   
      $(function(){
                 new PNotify({     
                title: 'Hinweis',
                text: ''+ event.title+' wurde verschoben',
                 type: 'success',
                mouse_reset: false
            });
                });
   
   
     }
     });
     },
   
   
     /* Drop verschieben Ende
    -----------------------------------------------------------------*/
   
   
   
   /* Drop Anfang
    -----------------------------------------------------------------*/   
   
   droppable: true, // this allows things to be dropped onto the calendar !!!
   drop: function(date, delta, allDay,event ) { // this function is called when 
   
   lightbox('Aktualisiert'); 
   
   
   var originalEventObject = $(this).data('eventObject'); 
   var title = $(this).data('eventObject');      
   var dd = $.fullCalendar.formatDate(date,"yyyy-MM-dd");                 
   var yyyy = $.fullCalendar.formatDate(date,"yyyy");
   var MM = $.fullCalendar.formatDate(date,"MM")-1;     
            
   
   $.ajax({
   url: 'add_calendar',
     data: 'title='+ originalEventObject.title+'&start='+ dd +'&endx='+ dd ,
     type: "POST",
     success: function(json) {
   
   // Alles löschen
   localStorage.clear();
   
   // Monat minus 1 weil Anfang 0 ist
   
   
   // Setzen der Startvariblen für den richtigen View
   localStorage.setItem('yearresult', yyyy);
   localStorage.setItem('monthresult', MM);
   
   // Lade View
   location.reload();
   
     //alert('Erfolgreich hinzugefügt');
   
     $(function(){
                 new PNotify({     
                title: 'Hinweis',
                text: ''+ originalEventObject.title+' erfolgreich hinzugefügt',
                 type: 'success',
                mouse_reset: false
            });
                });
   
   
     //location.reload();
      
     }
   
     });
   
   
   }
   
   
     
    });
    
   });
   
</script>
<style>
   #wrap {
   width: 1200px;
   margin: 0 auto;
   }
   .del {
   float: right;
   width: 20px;
   padding: 0 0px;
   color:#b30425;
   border: 1px solid #b30425;
   background: #ffffff!important;
   text-align: center;
   cursor: pointer;
   }
   #Feiertag {
   float: left;
   width: 121px;
   padding: 0 0px;
   color:#ffffff;
   border: 1px solid #ffffff;
   background: #b30425!important;
   text-align: center;
   cursor: pointer;
   }
   #Liefertag {
   float: left;
   width: 121px;
   padding: 0 0px;
   color:#ffffff;
   border: 1px solid #ffffff;
   background: #85B81D!important;
   text-align: center;
   cursor: pointer;
   }
   .fc-event {
   background-color: #ffffff;
   border: 0px solid #ffffff;
   color: #FFFFFF;
   cursor: default;
   font-size: 1.05em;
   }
   #wrap {
   width: 900px;
   margin: 0 auto;
   }
   #external-events {
   float: left;
   width: auto;
   padding: 0 10px;
   border: 1px solid #ccc;
   background: #eee;
   text-align: left;
   }
   #external-events h4 {
   font-size: 13px;
   margin-top: 0;
   padding-top: 1em;
   }
   .external-event { /* try to mimick the look of a real event */
   margin: 10px 0;
   padding: 20px 4px;
   background: #85b81d;
   color: #fff;
   width: 90px;
   font-size: 1.5em;
   text-align: center;
   cursor: pointer;
   }
   .feiertag { /* try to mimick the look of a real event */
   margin: 10px 0;
   padding: 20px 4px;
   background: #b30425;
   width: 90px;
   color: #fff;
   font-size: 1.5em;
   text-align: center;
   cursor: pointer;
   }
   #external-events p {
   margin: 1.5em 0;
   font-size: 11px;
   color: #666;
   }
   #external-events p input {
   margin: 0;
   vertical-align: middle;
   }
   #calendar {
   float: left;
   width: 900px;
   }
   <!--.fc-event-time{display:none}
   .custom,
   .custom div,
   .custom span {
   background-color: green; /* background color */
   border-color: green;     /* border color */
   color: yellow;           /* text color */
   }
   #lightbox {
   position: absolute;
   top: 0;
   left: 50%;
   width: 200px;
   margin-left: -50px;
   margin-top: 200px;
   background: #fff;
   z-index: 1001;
   display: none;
   color: #85b81d;
   text-align: center;
   font-weight: bold;
   }
   #lightbox-shadow {
   position: absolute;
   top: 0;
   left: 0;
   width: 100%;
   height: 100%;
   background: #000000;
   filter: alpha(opacity=75);
   -moz-opacity: 0.75;
   -khtml-opacity: 0.75;
   opacity: 0.75;
   z-index: 1000;
   display: none;
   }
</style>
<div class="container">
   <div class="row">
      <div class="col-md-1">
         <div id='external-events'>
            <div class='external-event'  id='awesome_liefertag' data-hash="Liefertag" >Liefertag</div>
            <div class='external-event feiertag'  id='awesome_feiertag' data-hash="Feiertag" >Feiertag</div>
         </div>
      </div>
      <div class="col-md-11">
         <div id='wrap'>
            <div id='calendar'></div>
         </div>
      </div>
   </div>
</div>
<div style='clear:both'></div>
@stop