var map1;
$(document).ready(function() {
    $('.gmap').css('height', '400px');
    map1 = new GMaps({
        div: '#map1',
        lat: 43.654438,
        lng: -79.380699,
        zoom: 8,
    });
    $('#geocoding_form').submit(function(e) {
        e.preventDefault();
        GMaps.geocode({
            address: $('#address')
                .val()
                .trim(),
            callback: function(results, status) {
                if (status == 'OK') {
                    var latlng = results[0].geometry.location;
                    map1.setCenter(latlng.lat(), latlng.lng());
                    map1.addMarker({
                        lat: latlng.lat(),
                        lng: latlng.lng(),
                    });
                }
            },
        });
    });

    var map;
    var route;
    map = new GMaps({
        div: '#map',
        lat: 40.712784,
        lng: -74.005941,
        zoom: 8,
        click: function(e) {
            map.addMarker({
                lat: e.latLng.lat(),
                lng: e.latLng.lng(),
            });
        },
    });
    $('#forward').attr('disabled', 'disabled');
    $('#back').attr('disabled', 'disabled');
    $('#get_route').click(function(e) {
        e.preventDefault();

        origin = map.markers[0].getPosition();
        destination = map.markers[map.markers.length - 1].getPosition();

        map.getRoutes({
            origin: [origin.lat(), origin.lng()],
            destination: [destination.lat(), destination.lng()],
            travelMode: 'driving',
            callback: function(e) {
                route = new GMaps.Route({
                    map: map,
                    route: e[0],
                    strokeColor: '#336699',
                    strokeOpacity: 0.5,
                    strokeWeight: 10,
                });
                $('#forward').removeAttr('disabled');
                $('#back').removeAttr('disabled');
            },
        });
        $('#forward').click(function(e) {
            e.preventDefault();
            route.forward();

            if (route.step_count < route.steps_length)
                $('#steps').append('<li>' + route.steps[route.step_count].instructions + '</li>');
        });
        $('#back').click(function(e) {
            e.preventDefault();
            route.back();

            if (route.step_count >= 0)
                $('#steps')
                    .find('li')
                    .last()
                    .remove();
        });
    });

    $('.responsive_map')
        .closest('.card-body')
        .on('resize', function() {
            $(window).trigger('resize');
        });
    $('.sidebar-toggle,.showhide').on('click', function() {
        setTimeout(function() {
            map.refresh();
        }, 200);
    });
});
