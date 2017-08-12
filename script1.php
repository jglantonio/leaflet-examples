
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
            </div>
            <div class="col-md-6 p-0">
                <div id="position">
                </div>
            <div>
        <div>
    </div>
    

    <script>
        // Init map
        // L.map('<id>').setview(latlng center , initialzoom)
        
        var mymap = L.map('mapEurope').setView([61.85,224.3], 0);
        
        // Define conners of the map
        var bounds = [[0,0], [400,400]]; // corner 1 and conner 2
        
        // Init , static map
        var image = L.imageOverlay('img/map_europe.png', bounds).addTo(mymap);
       
        mymap.on('click', function(e) {
            html = "Lat : " + Math.round(e.latlng.lat*100)/100+ " <br> Lon :" + Math.round(e.latlng.lng*100)/100+"<br>";
            $('#position').append(html);
        });

    </script>
</div>

<?php 
    include('footer.php')
?>