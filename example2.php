
<?php 
    include('header.php')
?>

<div class="container">
    <div id="row">
        <div class="col-md-12">
            <h1>Marks in static map</H1>
        </div>
        <div class="col-md-12">
            <div class="col-md-6 p-0">
                <div id="mapEurope">
                </div>
            <div>
            <div 
                class= "col-md-6"
                id="position">
            <div>
        <div>
    </div>
    

    <script>
        // Init map
        // L.map('<id>').setview(latlng center , initialzoom)
        
        var mymap = L.map('mapEurope').setView([50,50], 0);
        
        // Define conners of the map
        var bounds = [[0,0], [400,400]]; // corner 1 and conner 2
        
        // Init , static map
        var image = L.imageOverlay('img/map_europe.png', bounds).addTo(mymap);
        
        var sol = L.latLng([ 10, 10 ]);
        
        L.marker(sol).addTo(mymap);
        
        mymap.setView( [70, 120], 1);

        mymap.on('click', function(e) {
            html = "Lat : " + e.latlng.lat + " <br> , Lon :" + e.latlng.lng;
            $('#position').append(html);
        });
    </script>
</div>

<?php 
    include('footer.php')
?>