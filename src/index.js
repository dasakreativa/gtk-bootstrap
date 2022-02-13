try {
	require('popper.js');

	window.jQuery = $;
	window.$ = $;

	require("bootstrap");
} catch (error) {}

require('./js/dashboard.js');
