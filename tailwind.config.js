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
		},
		screens: {
			sm: '640px',
			md: '768px' /* iPad */,
			lg: '1024px',
			xl: '1280px',
		},
		container: {
			padding: {
				DEFAULT: '1rem',
				sm: '2rem',
				md: '3rem',
				lg: '4rem',
				xl: '5rem',
			},
		},
		extend: {},
	},
	plugins: [],
};
