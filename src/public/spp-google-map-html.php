<div >
<h3>My Google Maps</h3>
    <!--The div element for the map -->
    <input id="pac-input" class="controls" type="text" placeholder="Search Box">
    <div id="googleMap" style="width: 400px;height:400px;"></div>
</div>
<script>
function myMap(latitude = <?php echo $option['lat']; ?> , longitude = <?php echo $option['lang']; ?>) {
    const myLatLng = { lat: latitude, lng: longitude };
    var mapProp= {
    center: new google.maps.LatLng(latitude, longitude),
        zoom: 13,
        mapTypeId: "roadmap",
    };

    var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
    new google.maps.Marker({
        position: myLatLng,
        map,
        title: 'hi marker',
    });

}
</script>
<!-- <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=University of Oxford&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://piratebay-proxys.com/">Piratebay</a></div><style>.mapouter{position:relative;text-align:right;width:600px;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:600px;height:400px;}.gmap_iframe {width:600px!important;height:400px!important;}</style></div> -->