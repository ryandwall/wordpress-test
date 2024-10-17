/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./**/*.{php,html,js}",
    "!./node_modules/**/*"
    
  ],
  theme: {
    extend: {
      screens: {
        '900px': '900px',
        '787px': '787px',
        '788px': '788px',
        '1160px': '1160px',   
      },
      colors: {
        headerwhite: '#E6E6E6',
        navbarblack: 'rgb(29, 29, 29)',
        linkyellow: '#fac40b',
        offwhite: '#f0f2f5',
        lga: 'rgba(255, 187, 0, 0.774)',
        lgb: 'rgb(255, 166, 0)',
      },
    },
  },
  plugins: [],
}

