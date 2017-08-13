console.log("mounted");
var leafletScript = {
     variables : function(){
        var _zone = [];
        getZone = function(){
            return _zone;
        }
        setZone = function(point){
            return _zone.push(point);
        }
     },
     setPoligon: function(e){
        var lat = Math.round(e.latlng.lat*100)/100;
        var lng = Math.round(e.latlng.lng*100)/100;
        this.variables([lat,lng]);
     },
     getPoligon: function(e){
         var variable = this.variables.getZone();
         return variable;
     }
};
