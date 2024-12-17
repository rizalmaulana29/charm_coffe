/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      './node_modules/flowbite/**/*.js'
    ],
    theme: {
      extend: {
        fontFamily: {
            sans: ['"Plus Jakarta Sans"', 'sans-serif']
        },
        colors: {
            one: '#607274',
            two: '#FAEED1',
            three: '#DED0B6',
            four: '#B2A59B'
        }
      },
    },
    plugins: [
        require('flowbite/plugin'),
        require('flowbite/plugin')({
            charts: true,
        }),
    ],
  }
