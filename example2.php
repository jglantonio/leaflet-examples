
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
        var points = [
            [
                [ 24.44 , 48.3], "Spain"
            ],
            [
                [ 40.95  , 28.02], " Galiza"
            ],
            [
                [ 27.95 , 19.93], " Portugal"
            ],
            [
                [49.12,113.09 ], " France"
            ],
        ];
        var sol = L.latLng(points);

        $.each(points,function(){
            L.marker(this[0]).addTo(mymap)
		        .bindPopup(this[1]).openPopup();
        
        });
    </script>
</div>

<?php 
    include('footer.php')
?>