/** Compressed using google closure compiler 2011-07-14 15:02 **/

(function(m, $) {

	
	var text = [];
	
	if (!m.textshadow) 
		text.push("CSS3 text-shadow, ger skugga åt vissa titlar/överskrifter");

	if (!m.rgba) 
		text.push("CSS3 rgba(), används för alfatransparent färgsättning");
	
	if (!m.cssgradients)
		text.push("CSS3 gradients, används för vissa bakgrundsfärger");
	
	if (!m.borderradius)
		text.push("CSS3 border-radius, används för rundade hörn");
	
	if (!m.csstransforms)
		text.push("CSS3 transforms, används för att ge vissa grafiska effekter");
	
	if (!m.csstransitions)
		text.push("CSS3 transitions, används för att ge snyggare övergångar i grafiska effekter");
	
	if (text.length > 0) {
		$("#compatibility-problems").append( "<li>" + text.join('</li><li>') + "</li>"  );
		$("#compatibility-message").show(); 
	}	
})(Modernizr, jQuery);