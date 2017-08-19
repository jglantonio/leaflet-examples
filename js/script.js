console.log("mounted");
var leafletScript = {
    zone : [],
    setPointToZone : function(e){
       this.zone.push(
           this.roundPoint(e.latlng.lat,100),
           this.roundPoint(e.latlng.lng,100)
       );
    },
    roundPoint : function(point,value){
        return Math.round(point*value)/value;
    },
    getZone:function (){
        return this.zone;
    },
    setZone:function(zone){
        this.zone = zone;
    },
    showLatLng : function (e,id){
        var lng = this.roundPoint(e.latlng.lng,100);
        var lat = this.roundPoint(e.latlng.lat,100);
        var html = "Lat :"+lng + "<br> Lng :"+lat+"<br> ";
        $(id).append(html);
    }

}