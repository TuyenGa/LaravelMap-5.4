/**
 * Created by Vuong on 2/22/2017.
 */
(function(window, google, maperizer) {

    maperizer.MAP_OPTIONS_GEOLOCATION = {
        geolocation: true,
        center: {
            lat: -64.426105,
            lng: -28.789862
        },
        zoom: 12,
        searchbox: true,
        geocoder: true
    }

    maperizer.MAP_OPTIONS_ZOOM = {
        geolocation: true,
        center: {
            lat: 0,
            lng: 0
        },
        zoom: 8,
        searchbox: true,
        geocoder: true
    }

    maperizer.MAP_OPTIONS_ALL = {
        geolocation: true,
        center: {
            lat: 0,
            lng: 0
        },
        zoom: 17,
        searchbox: true,
        geocoder: true
    }


}(window, google, window.Maperizer || (window.Maperizer = {})));