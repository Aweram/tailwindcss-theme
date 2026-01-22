const plugin = require("tailwindcss/plugin")

module.exports = plugin.withOptions(function (options = {}) {
    return ({addComponents, theme}) => {
        const components = {
            '.form-check': {
                display: 'flex',
                justifyContent: 'flex-start',
                alignItems: 'center',
                flexWrap: 'nowrap',
            },
            '.form-check-input': {
                flex: '0 0 auto',
                width: 'var(--check-input-width)',
                height: 'var(--check-input-width)',
                marginTop: 'var(--check-input-mt)',

                appearance: 'none',
                backgroundColor: 'rgba(var(--input-bg), 1)',
                backgroundRepeat: 'no-repeat',
                backgroundPosition: 'center',
                backgroundSize: 'contain',

                borderWidth: "var(--input-border-width)",
                borderStyle: "solid",
                borderColor: "rgba(var(--input-border-color), 1)",

                printColorAdjust: 'exact',

                '&[type="checkbox"]': {
                    borderRadius: 'var(--check-input-border-radius)',
                },

                '&[type="radio"]': {
                    borderRadius: 'var(--check-radio-border-radius)'
                },

                '&:active': {
                    filter: 'var(--check-active-filter)'
                },

                '&:focus': {
                    borderColor: 'rgba(var(--input-focus-border-color), 1)',
                    outline: 0,
                },

                '&:checked': {
                    backgroundColor: 'rgba(var(--check-checked-bg-color), 1)',
                    borderColor: 'rgba(var(--check-checked-border-color), 1)',

                    '&[type="checkbox"]': {
                        backgroundImage: 'var(--check-checked-bg-image)',
                    },

                    '&[type="radio"]': {
                        backgroundImage: 'var(--check-radio-checked-bg-image)',
                    }
                },

                '&:disabled': {
                    pointerEvents: 'none',
                    filter: 'none',
                    opacity: 'var(--check-disabled-opacity)'
                },

                '&[disabled], &:disabled': {
                    '~ .form-check-label': {
                        cursor: 'default',
                        opacity: 'var(--check-disabled-opacity)'
                    }
                }
            },

            '.form-check-label': {
                marginLeft: 'var(--check-label-ml)'
            }
        }

        addComponents(components)
    }
})
