<div class="white-popup">
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script type="text/javascript">
    var map2;
    function initialize() {
        map2 = new google.maps.Map(document.getElementById('map-canvas2'), {
            zoom: 14,
            center: {lat: 46.478271, lng: 30.743917}
        });
        var markerImg1 = {
            url: '/images/logo-dark.png',
            anchor: new google.maps.Point(46.478271, 30.743917)
        }
        marker1 = new google.maps.Marker({
            map: map,
            title: 'Шагги Стиль',
            icon: markerImg1,
            position: new google.maps.LatLng(46.478271, 30.743917),
            animation: google.maps.Animation.DROP

        });
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
<div class="map-canvas" id="map-canvas3" width="100%"></div>
</div>