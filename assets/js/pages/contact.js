var Contact = function () {

    return {
        
        //Map
        initMap: function () {
			var map;
			$(document).ready(function(){
			  map = new GMaps({
				div: '#map',
				lat: 48.192419,
				lng: 16.358823
			  });
			   var marker = map.addMarker({
					lat: 48.192419,
					lng: 16.358823,
		            title: 'KochAbo.at'
		        });
			});
        }

    };
}();