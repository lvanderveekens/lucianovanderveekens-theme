module.exports = {
	mode: 'jit',
	purge: [ '**/*.php', '*.php' ],
	content: [],
	theme: {
		fontFamily: {
			sans: [ 'Open Sans', 'sans-serif' ],
		},
		colors: {
			// http://www.zovirl.com/2011/07/22/solarized_cheat_sheet/
			base0: '#839496',
			base02: '#073642',
			base03: '#002B36',
			orange: '#CB4B16',
			blue: '#268bd2',
		},
		extend: {},
	},
	plugins: [],
};
