
<?php 
    include('header.php')
?>

<div class="container">
    <div id="row">
        <div class="col-md-12">
            <h1>Delimiter zones</H1>
            <h2>Europe in ww1</H1>
            <hr>
        </div>
        <div class="col-md-12">
            <div class="col-md-12 p-0">
                <div id="mapEurope">
                </div>
            <div>
            <div class="col-md-12 p-0">
                <div class="col-md-12 p-0">
                    This is lat lng  , you cicked : 
                </div>    
                <div id="position" class="col-md-12 p-0">
                </div>
            <div>
        <div>
    </div>
    

    <script>
        var zones = [];
        // Init map
        // L.map('<id>').setview(latlng center , initialzoom)
        var mymap = L.map('mapEurope').setView([65.51 ,211.11], 2);

        // Define conners of the map
        var bounds = [[0,0], [400,400]]; // corner 1 and conner 2
        
        // Init , static map
        var image = L.imageOverlay('img/map_europe_ww1.png', bounds).addTo(mymap);
        var size = zonesWW1.length;
        for(var x = 0 ; x < size ; x++){
            var polygon = L.polygon(zonesWW1[x]).addTo(mymap);
            polygon.bindPopup(layers[0].toString());  
        }
        
        mymap.on('click', function(e){
            var lat = Math.round(e.latlng.lat*100)/100;
            var lng = Math.round(e.latlng.lng*100)/100;
            html = "Lat : " + lat+ " <br> Lon :" + lng+"<br>";
            $('#position').append(html);
            zones.push([lat,lng]);
        });
    </script>
</div>

<?php 
    include('footer.php')
?>