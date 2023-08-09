const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require("tailwindcss/colors");

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/css/admin.css",

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
                '2xl': '4rem'
            }
        },

        screens: {
            'xs': "480px", // => @media (min-width: 480px) {...}

            ...defaultTheme.screens
        },

        flex: {
            '0': '0 0 auto',
        },

        colors: {
            black: colors.black,
            white: colors.white,
            inherit: colors.inherit,
            current: colors.current,
            transparent: colors.transparent,

            body: 'rgba(var(--color-body), <alpha-value>)',
            // theme colors
            light: 'rgba(var(--color-light), <alpha-value>)',
            dark: 'rgba(var(--color-dark), <alpha-value>)',
            success: 'rgba(var(--color-success), <alpha-value>)',
            danger: 'rgba(var(--color-danger), <alpha-value>)',
            warning: 'rgba(var(--color-warning), <alpha-value>)',
            info: 'rgba(var(--color-info), <alpha-value>)',
            primary: 'rgba(var(--color-primary), <alpha-value>)',
            secondary: 'rgba(var(--color-secondary), <alpha-value>)',
        },

        extend: {
            fontFamily: {
                'sans': ['Montserrat', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [],
}

