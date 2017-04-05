(function(window, $) {
    var $maperizer = $('#showmap').maperizer(Maperizer.MAP_OPTIONS_ALL);


    $maperizer.maperizer('getCurrentPosition',function (position) {
        var lat = position.coords.latitude;
        var lng = position.coords.longitude;
        $maperizer.maperizer('addMarker',{
            lat :lat,
            lng : lng
        });

    });


    $.ajax({
        type: "Get",
        url: '/maps'
    }).done(function(data){
        var array = JSON.parse(data);

        for( var i = 0 ; i <= array.length ; i++ ){
        $maperizer.maperizer('addMarker', {
            lat: array[i].lat,
            lng: array[i].lng,
            content: '<div><strong>' + array[i].street +' , ' +array[i].state +' , '+ array[i].city + '<br>'+' Giá '+array[i].price +' </strong></br>'+
                ''+ array[i].description +'<br>' +
                '<a href="/maps/details/'+array[i].id+'">More details</a>'
            // icon:'http://mapicons.nicolasmollet.com/wp-content/uploads/mapicons/shape-default/color-128e4d/shapecolor-color/shadow-1/border-dark/symbolstyle-white/symbolshadowstyle-dark/gradient-no/home.png'


        });
        }

    });
    // console.log(window.data);




}(window,jQuery));




