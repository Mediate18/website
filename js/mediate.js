var ready;

ready = function() {
	Mediate.init();
};

$(document).ready(ready);

Mediate = {
	doDebug: true,
	
	debug: function(msg) {
		if (Mediate.doDebug)
			console.log(msg);
	},
	
	init: function() {
		$.getJSON( "config/mediate.json", function( data ) {
			Mediate.debug(data);
		});
	}
};