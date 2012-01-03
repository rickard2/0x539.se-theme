/* Author: 

*/


(function($, w, wl) {

	// The #main DOM object
	var main = document.getElementById("main");

	// Loads the URL from the server using an AJAX request
	// url: string
	// TODO: Cache
	// TODO: error handling
	function asyncLoad(url) {

		$.ajax(url, {
			error: function(jqXHR, textStatus, errorThrown) {

				main.innerHTML = '';
				main.className = '';

			}, success: function (data, textStatus, jqXHR) {

				// Set the returned content as innerHTML of #main and remove loading class
				main.innerHTML = data;
				main.className = '';

				// Push the new url to the history URL stack
				w.history.pushState(null, null, url);
			}
		});

		// Add loading class to #main
		main.className = 'loading';
	}


	// When clicking internal links (links with the same origin) load them asynchronously
	// using asyncLoad()
	$("a[href^='" + wl.origin  + "']").live('click', function(e) {

		asyncLoad( this.href );

		e.preventDefault();
		return false;
	});

	// When the user navigates back in the browser, load the previous URL using asyncLoad
	// TODO: Exclude popstate events on initial page load
	w.onpopstate = function() { asyncLoad( wl.href ); };

})(jQuery, window, window.location);


















