const plugin = require("tailwindcss/plugin")

module.exports = plugin.withOptions(function (options = {}) {
    return ({addComponents}) => {
        const components = {
            '.modal-backdrop': {
                position: 'fixed',
                inset: 0,
                backgroundColor: 'rgba(var(--modal-backdrop-bg), var(--modal-backdrop-opacity))',
            },

            '.modal': {
                position: 'relative',
                backgroundColor: 'rgba(var(--modal-bg), 1)',
                backgroundClip: 'border-box',

                borderWidth: 'var(--modal-border-width)',
                borderRadius: 'var(--modal-border-radius)',
                borderStyle: 'solid',
                borderColor: 'var(--modal-border-color)',

                boxShadow: 'var(--modal-box-shadow)',
                overflow: 'hidden',

                '& > *:last-child': {
                    borderRadius: '0 0 var(--modal-inner-border-radius) var(--modal-inner-border-radius)',
                }
            },

            '.aside-modal': {
                position: 'fixed',
                top: 0,
                bottom: 0,

                backgroundColor: 'rgba(var(--modal-bg), 1)',
                backgroundClip: 'border-box',

                borderLeftWidth: 'var(--modal-border-width)',
                borderStyle: 'solid',
                borderColor: 'var(--modal-border-color)',

                boxShadow: 'var(--modal-box-shadow)',
                overflow: 'hidden',
            }
        }

        addComponents(components)
    }
})
