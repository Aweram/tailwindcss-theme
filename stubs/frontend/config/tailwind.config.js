const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require("tailwindcss/colors");

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/css/app.css",

        "./vendor/aweram/tailwindcss-theme/src/resources/views/**/*.blade.php",
    ],
    theme: {
        container: {
            center: true,
            padding: {
                DEFAULT: '.75rem', // 12px
                sm: '3.125rem', // 50px
                md: '2.25rem', // 36px
                lg: '2.75rem', // 44px
                xl: '3.25rem', //52px
                '2xl': '3rem' // 64px
            }
        },

        screens: {
            'xs': "480px", // => @media (min-width: 480px) {...}

            ...defaultTheme.screens
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
                "btn-x": 'var(--btn-padding-x)',
                'indent-xs': 'var(--indent-xs)',
                'indent-sm': 'var(--indent-sm)',
                'indent': 'var(--indent-width)',
                'indent-lg': 'var(--indent-lg)',
                'indent-half': 'var(--indent-half)',
                'indent-double': 'var(--indent-double)',
                'spacer': 'var(--indent-spacer)',
                'modal-aside': 'var(--modal-aside-width)',
            },
            zIndex: {
                'dropdown': 'var(--z-dropdown)',
                'sticky': 'var(--z-sticky)',
                'fixed': 'var(--z-sticky)',
                'modal-backdrop': 'var(--z-modal-backdrop)',
                'modal': 'var(--z-modal)',
            },
            flex: {
                '0': '0 0 auto',
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
        require("./vendor/aweram/tailwindcss-theme/src/resources/tailwind-plugins/tableStyle"),
        require("./vendor/aweram/tailwindcss-theme/src/resources/tailwind-plugins/beautifyScrollbar"),
        require("./vendor/aweram/tailwindcss-theme/src/resources/tailwind-plugins/dropdownStyle"),
        require("./vendor/aweram/tailwindcss-theme/src/resources/tailwind-plugins/modalStyle"),
    ],
}

