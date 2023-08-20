const plugin = require("tailwindcss/plugin")

module.exports = plugin.withOptions(function (options = {}) {
    return ({ addComponents }) => {
        const components = {
            '.form-select': {
                display: 'inline-flex',
                justifyContent: 'center',
                alignItems: 'center',
                flexWrap: 'nowrap',

                appearance: 'none',
                backgroundColor: 'rgba(var(--input-bg), 1)',
                backgroundClip: 'padding-box',
                backgroundImage: 'var(--select-indicator)',
                backgroundRepeat: 'no-repeat',
                backgroundPosition: 'var(--select-indicator-position)',
                backgroundSize: 'var(--select-indicator-size)',

                borderWidth: 'var(--input-border-width)',
                borderRadius: 'var(--input-border-radius)',
                borderStyle: 'solid',
                borderColor: 'rgba(var(--input-border-color), 1)',

                height: 'var(--input-height)',
                width: '100%',
                minWidth: 'var(--input-height)',
                paddingLeft: 'var(--input-padding-x)',
                paddingRight: 'var(--select-indicator-padding)',

                fontSize: 'var(--input-font-size)',
                lineHeight: 'var(--input-line-height)',
                fontWeight: 'var(--input-font-weight)',
                letterSpacing: '.1em',
                color: 'var(--input-color)',

                '&:focus': {
                    borderColor: 'rgba(var(--input-focus-border-color), 1)',
                    outline: 0,
                },

                '&[multiple], &[size]:not([size="1"])': {
                    paddingRight: 'var(--input-padding-x)',
                    backgroundImage: 'none'
                },

                '&:disabled': {
                    backgroundColor: "rgba(var(--input-disabled-bg), 1)",
                    opacity: 1
                },

                '&:-moz-focusring': {
                    color: 'transparent',
                    textShadow: '0 0 0 var(--input-color)'
                }
            },

            '.form-select-sm': {
                height: "var(--input-height-sm)",
                paddingLeft: "var(--input-padding-x-sm)",
                fontSize: "var(--input-font-size-sm)",
                lineHeight: "var(--input-line-height-sm)",
            },

            '.form-select-lg': {
                height: "var(--input-height-lg)",
                paddingLeft: "var(--input-padding-x-lg)",
                fontSize: "var(--input-font-size-lg)",
                lineHeight: "var(--input-line-height-lg)",
            }
        }

        addComponents(components)
    }
})
