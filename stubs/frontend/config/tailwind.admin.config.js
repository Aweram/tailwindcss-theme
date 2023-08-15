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
            "body-bg": 'rgba(var(--color-body-bg), <alpha-value>)',
            // theme colors
            light: {
                DEFAULT: 'rgba(var(--color-light), <alpha-value>)',
                darken: 'rgba(var(--color-light-darken), <alpha-value>)',
                hover: 'rgba(var(--color-light-hover), <alpha-value>)',
            },
            dark: {
                DEFAULT: 'rgba(var(--color-dark), <alpha-value>)',
                lighten: 'rgba(var(--color-dark-lighten), <alpha-value>)',
                darken: 'rgba(var(--color-dark-darken), <alpha-value>)',
                hover: 'rgba(var(--color-dark-hover), <alpha-value>)',
            },
            success: {
                DEFAULT: 'rgba(var(--color-success), <alpha-value>)',
                lighten: 'rgba(var(--color-success-lighten), <alpha-value>)',
                darken: 'rgba(var(--color-success-darken), <alpha-value>)',
                hover: 'rgba(var(--color-success-hover), <alpha-value>)',
            },
            danger: {
                DEFAULT: 'rgba(var(--color-danger), <alpha-value>)',
                lighten: 'rgba(var(--color-danger-lighten), <alpha-value>)',
                darken: 'rgba(var(--color-danger-darken), <alpha-value>)',
                hover: 'rgba(var(--color-danger-hover), <alpha-value>)',
            },
            warning: {
                DEFAULT: 'rgba(var(--color-warning), <alpha-value>)',
                lighten: 'rgba(var(--color-warning-lighten), <alpha-value>)',
                darken: 'rgba(var(--color-warning-darken), <alpha-value>)',
                hover: 'rgba(var(--color-warning-hover), <alpha-value>)',
            },
            info: {
                DEFAULT: 'rgba(var(--color-info), <alpha-value>)',
                lighten: 'rgba(var(--color-info-lighten), <alpha-value>)',
                darken: 'rgba(var(--color-info-darken), <alpha-value>)',
                hover: 'rgba(var(--color-info-hover), <alpha-value>)',
            },
            primary: {
                DEFAULT: 'rgba(var(--color-primary), <alpha-value>)',
                lighten: 'rgba(var(--color-primary-lighten), <alpha-value>)',
                darken: 'rgba(var(--color-primary-darken), <alpha-value>)',
                hover: 'rgba(var(--color-primary-hover), <alpha-value>)',
            },
            secondary: {
                DEFAULT: 'rgba(var(--color-secondary), <alpha-value>)',
                darken: 'rgba(var(--color-secondary-darken), <alpha-value>)',
                hover: 'rgba(var(--color-secondary-hover), <alpha-value>)',
            },
        },

        themeColors: {
            light: 'dark',
            dark: 'light',
            success: 'light',
            danger: 'light',
            warning: 'dark',
            info: 'dark',
            primary: 'light',
            secondary: 'light'
        },

        extend: {
            fontFamily: {
                'sans': ['Montserrat', ...defaultTheme.fontFamily.sans],
            },
            spacing: {
                "btn-ico-text": 'var(--btn-ico-text-space)',
                "btn-x-ico": 'var(--btn-padding-x-ico)'
            },
        },
    },
    plugins: [
        require("./resources/tailwind-plugins/btnStyle"),
        require("./resources/tailwind-plugins/formControlStyle"),
    ],
}

