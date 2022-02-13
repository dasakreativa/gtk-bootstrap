$('.btn-sidebar, .overlay').click(function() {
	$('#app').toggleClass('toggled');
});

try {
	require('metismenu');
	$('#menu').metisMenu();
} catch (error) {}
