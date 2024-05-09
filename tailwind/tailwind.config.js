// Set the Preflight flag based on the build target.
const includePreflight = 'editor' === process.env._TW_TARGET ? false : true;

const plugin = require('tailwindcss/plugin');

module.exports = {
	presets: [
		// Manage Tailwind Typography's configuration in a separate file.
		require('./tailwind-typography.config.js'),
	],
	content: [
		'./theme/**/*.php',
		'./theme/blocks/**/*.{php, js}',
	],
	theme: {
		// Extend the default Tailwind theme.
		extend: {
			colors: {
				orangeSonos: '#F57F43',
				lightGraySonos: '#808080',
				gris: {
					oscuro: '#4D4D4F',
					medium: '#4D4D4F'
				},
				heroBg: "#262626E5"

			},
			container: {
				center: true,
			},
			fontSize: {
				"header-cta": [
					"3rem",
					{

						lineHeight: "3.125rem",
					},
				],
				"body-m": [
					"1.125rem",
					{
						fontWeight: "300",
						lineHeight: "1.25rem",
					},
				],
				"body-l": [
					"1.5rem",
					{
						fontWeight: "300",
						lineHeight: "1.875rem",
					},
				],
				"body-xl": [
					"2.25rem",
					{
						fontWeight: "400",
						lineHeight: "2.25rem",
					},
				]
			},
			fontFamily: {
				base: "Poppins ,sans-serif",
			},
		},
	},
	corePlugins: {
		// Disable Preflight base styles in builds targeting the editor.
		preflight: includePreflight,
	},
	plugins: [
		// Add Tailwind Typography (via _tw fork).
		require('@_tw/typography'),

		// Extract colors and widths from `theme.json`.
		require('@_tw/themejson'),

		// Uncomment below to add additional first-party Tailwind plugins.
		// require('@tailwindcss/forms'),
		// require('@tailwindcss/aspect-ratio'),
		// require('@tailwindcss/container-queries'),
		plugin(function ({ addComponents }) {
			addComponents({
				".container": {
					maxWidth: "100%",
					"@screen sm": {
						maxWidth: "540px",
					},
					"@screen md": {
						maxWidth: "720px",
					},
					"@screen lg": {
						maxWidth: "960px",
					},
					"@screen xl": {
						maxWidth: "1140px",
					},
				},
			});
		}),
		function ({ addUtilities }) {
			const newUtilities = {
				'.bg-orangeSonos': {
					color: '#333333',
				},
			}

			addUtilities(newUtilities, ['responsive', 'hover'])
		}
	],
};
