const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require("tailwindcss/colors");

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/css/app.css",

        "./vendor/aweram/tailwindcss-theme/src/resources/**/*.blade.php",
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
            light: 'rgba(var(--color-light), <alpha-value>)',
            dark: 'rgba(var(--color-dark), <alpha-value>)',
            success: 'rgba(var(--color-success), <alpha-value>)',
            danger: 'rgba(var(--color-danger), <alpha-value>)',
            warning: 'rgba(var(--color-warning), <alpha-value>)',
            info: 'rgba(var(--color-info), <alpha-value>)',
            primary: 'rgba(var(--color-primary), <alpha-value>)',
            secondary: 'rgba(var(--color-secondary), <alpha-value>)',
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
                'sans': ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            spacing: {
                "btn-ico-text": 'var(--btn-ico-text-space)',
                "btn-x-ico": 'var(--btn-padding-x-ico)',
                'indent-xs': 'var(--indent-xs)',
                'indent-sm': 'var(--indent-sm)',
                'indent': 'var(--indent-width)',
                'indent-lg': 'var(--indent-lg)',
                'indent-half': 'var(--indent-half)',
                'indent-double': 'var(--indent-double)',
                'spacer': 'var(--indent-spacer)',
            },
        },
    },
    plugins: [
        require("./vendor/aweram/tailwindcss-theme/src/resources/tailwind-plugins/gridExpand"),
        require("./vendor/aweram/tailwindcss-theme/src/resources/tailwind-plugins/btnStyle"),
        require("./vendor/aweram/tailwindcss-theme/src/resources/tailwind-plugins/formControlStyle"),
        require("./vendor/aweram/tailwindcss-theme/src/resources/tailwind-plugins/formSelectStyle"),
        require("./vendor/aweram/tailwindcss-theme/src/resources/tailwind-plugins/formCheckStyle"),
        require("./vendor/aweram/tailwindcss-theme/src/resources/tailwind-plugins/cardStyle"),
    ],
}

