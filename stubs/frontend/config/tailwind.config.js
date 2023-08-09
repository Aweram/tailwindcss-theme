const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
export default {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./vendor/portedcheese/aweram-components/src/resources/**/*.blade.php",
  ],
  theme: {
      container: {
          center: true,
          padding: {
              DEFAULT: '.75rem',
              sm: '3.125rem',
              md: '2.25rem',
              lg: '2.75rem',
              xl: '3.25rem',
              '2xl': '3rem'
          }
      },

      screens: {
          'xs': "480px", // => @media (min-width: 480px) {...}

          ...defaultTheme.screens
      },

      flex: {
          '0': '0 0 auto',
      },

      extend: {
          fontFamily: {
              sans: ['Nunito', ...defaultTheme.fontFamily.sans],
          },
      },
  },
  plugins: [],
}

