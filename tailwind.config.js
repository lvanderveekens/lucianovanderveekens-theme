module.exports = {
	mode: 'jit',
	purge: [
		'**/*.php',
		'*.php',
	],
	content: [],
	theme: {
		extend: {
			colors: {
				base1: {
					100: '#002B36',
				},
				base2: {
					100: '#073642',
				},
			},
		},
	},
	plugins: [],
};
