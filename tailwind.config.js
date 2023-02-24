module.exports = {
	mode: 'jit',
	purge: [ '**/*.php', '*.php' ],
	content: [],
	theme: {
		fontFamily: {
			sans: [ 'Raleway', 'sans-serif' ],
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
				md: '2rem',
				lg: '4rem',
				xl: '5rem',
			},
		},
		extend: {},
	},
	plugins: [],
};
