const plugin = require("tailwindcss/plugin")

module.exports = plugin.withOptions(function (options = {}) {
    return ({addComponents}) => {
        const components = {
            '.card': {
                position: 'relative',
                display: 'flex',
                flexDirection: 'column',
                minWidth: '0',
                color: 'rgba(var(--color-body), 1)',
                wordWrap: 'break-word',
                backgroundColor: 'rgba(var(--card-bg), 1)',
                backgroundClip: 'border-box',

                borderWidth: "var(--card-border-width)",
                borderRadius: "var(--card-border-radius)",
                borderStyle: "solid",
                borderColor: "rgba(var(--card-border-color), 1)",

                boxShadow: 'var(--card-box-shadow)',
                overflow: 'hidden',

                '& > *:last-child': {
                    borderRadius: '0 0 var(--card-inner-border-radius) var(--card-inner-border-radius)',
                }
            },

            '.card-body': {
                flex: '1 1 auto',
                padding: 'var(--card-spacer-y) var(--card-spacer-x)',
                color: 'rgba(var(--card-color), 1)'
            },

            '.card-title': {
                marginBottom: 'var(--card-title-spacer-y)',
                color: 'rgba(var(--card-title-color), 1)',
            },

            '.card-subtitle': {
                marginTop: 'calc(-.5 * var(--card-title-spacer-y))',
                marginBottom: 0,
                color: 'rgba(var(--card-subtitle-color))'
            },

            '.card-text': {
                marginBottom: 'var(--card-text-spacer-y)'
            },

            '.card-text:last-child': {
                marginBottom: 0
            },

            '.card-header': {
                padding: 'var(--card-cap-padding-y) var(--card-cap-padding-x)',
                marginBottom: 0,
                color: 'rgba(var(--card-cap-color), 1)',
                backgroundColor: 'var(--card-cap-bg)',

                borderBottomWidth: 'var(--card-border-width)',
                borderBottomStyle: 'solid',
                borderBottomColor: 'rgba(var(--card-border-color), 1)',

                '&:first-child': {
                    borderRadius: 'var(--card-inner-border-radius) var(--card-inner-border-radius) 0 0',
                }
            },

            '.card-footer': {
                padding: 'var(--card-cap-padding-y) var(--card-cap-padding-x)',
                color: 'rgba(var(--card-cap-color), 1)',
                backgroundColor: 'var(--card-cap-bg)',

                borderTopWidth: 'var(--card-border-width)',
                borderTopStyle: 'solid',
                borderTopColor: 'rgba(var(--card-border-color), 1)',

                '&:last-child': {
                    borderRadius: '0 0 var(--card-inner-border-radius) var(--card-inner-border-radius)',
                }
            },

            '.card-img, .card-img-top, .card-img-bottom': {
                width: '100%'
            },

            '.card-img, .card-img-top': {
                borderTopLeftRadius: "var(--card-inner-border-radius)",
                borderTopRightRadius: "var(--card-inner-border-radius)",
            },

            '.card-img, .card-img-bottom': {
                borderBottomLeftRadius: "var(--card-inner-border-radius)",
                borderBottomRightRadius: "var(--card-inner-border-radius)",
            }
        }

        addComponents(components)
    }
})
