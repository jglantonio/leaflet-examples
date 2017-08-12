
<?php 
    include('header.php')
?>

<div class="container">
    <h1>Static map</H1>
    <div id="mapEurope">
    </div>

    <script>
        // Init map
        // L.map('<id>').setview(latlng center , initialzoom)
        
        
        var mymap = L.map('mapEurope').setView([61.85,224.3], 0);
        
        // Define conners of the map
        var bounds = [[0,0], [400,400]]; // corner 1 and conner 2
        
        // Init , static map
        var image = L.imageOverlay('img/map_europe.png', bounds).addTo(mymap);
        
    </script>
</div>

<?php 
    include('footer.php')
?>