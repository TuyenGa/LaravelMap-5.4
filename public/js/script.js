(function(window, $) {
 var $maperizer = $('#map-canvas').maperizer(Maperizer.MAP_OPTIONS_ALL);

    var latField = $('input#lat');
        lngField = $('input#lng');

    $maperizer.maperizer('getCurrentPosition',function (position) {
        $maperizer.maperizer('addMarker',{
            lat : position.coords.latitude,
            lng : position.coords.longitude
        });
    });


    $maperizer.maperizer('attachEventsToMap',[{

        name:'click',
        callback:function (event) {
            $maperizer.maperizer('removeAllMarkers');

            $maperizer.maperizer('addMarker',{

                lat: event.latLng.lat(),
                lng: event.latLng.lng()
            });
            latField.val(event.latLng.lat());
            lngField.val(event.latLng.lng());
            
        }

    }]);
// console.log([latField, lngField]);
    $.ajax({
        type: "POST",
        url: window.location.href
    }).done(function(entry){
        //addFocusedMarker is a function to add a Marker and change the map view to center it
        $maperizer.maperizer('addFocusedMarker', {
            lat: entry.lat,
            lng: entry.lng
        });
    });



}(window,jQuery));



