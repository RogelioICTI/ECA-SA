<div id="map"></div>
<script>
    function initMap() {
        var mapDiv = document.getElementById('map');
        var map = new google.maps.Map(mapDiv, {
            center: {lat: 44.540, lng: -78.546},
            zoom: 8
        });
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsIzVsSXMo6LGJXUx8vfvvUVyb8CqRzx4&callback=initMap"
async defer></script>

