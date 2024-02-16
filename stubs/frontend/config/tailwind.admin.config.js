const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require("tailwindcss/colors");

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/css/admin.css",

        "./vendor/aweram/tailwindcss-theme/src/resources/views/**/*.blade.php",
        "./vendor/aweram/user-management/src/resources/views/**/*.blade.php",
        "./vendor/aweram/fileable/src/resources/views/**/*.blade.php"
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
                "btn-x-ico": 'var(--btn-padding-x-ico)',
                "btn-x": 'var(--btn-padding-x)',
                'indent-xs': 'var(--indent-xs)',
                'indent-sm': 'var(--indent-sm)',
                'indent': 'var(--indent-width)',
                'indent-lg': 'var(--indent-lg)',
                'indent-half': 'var(--indent-half)',
                'indent-double': 'var(--indent-double)',
                'spacer': 'var(--indent-spacer)',
                'auth-form': 'var(--auth-form)',

                'menu': 'var(--menu-length)',
                'outer-menu': "calc(100% - var(--menu-length))",
                'nav': "calc(100% - var(--indent-width))",
                'nav-full': "calc(100% - var(--menu-length) - var(--indent-double))",
                'modal-aside': 'var(--modal-aside-width)',
            },
            zIndex: {
                'dropdown': 'var(--z-dropdown)',
                'sticky': 'var(--z-sticky)',
                'fixed': 'var(--z-sticky)',
                'admin-menu-backdrop': 'var(--z-admin-menu-backdrop)',
                'admin-menu': 'var(--z-admin-menu)',
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
        require("./vendor/aweram/tailwindcss-theme/src/resources/tailwind-plugins/adminNavigationLink"),
        require("./vendor/aweram/tailwindcss-theme/src/resources/tailwind-plugins/dropdownStyle"),
        require("./vendor/aweram/tailwindcss-theme/src/resources/tailwind-plugins/modalStyle"),
    ],
}

