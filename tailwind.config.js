/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
  theme: {
    extend: {
        keyframes: {
            'expand': {
                '0%' : { transform : 'scale(1)'},
                '100%' : { transform : 'scale(1.2)'}
            }
        }
    },
  },
  plugins: [],
}

