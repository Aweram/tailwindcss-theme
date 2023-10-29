const plugin = require("tailwindcss/plugin")

module.exports = plugin.withOptions(function (options = {}) {
    return ({addComponents}) => {
        const components = {
            '.navigation-link': {
                display: 'flex',
                alignItems: 'center',
                flexWrap: 'nowrap',

                fontSize: 'var(--navigation-font-size)',
                lineHeight: 'var(--navigation-line-height)',
                color: 'rgba(var(--color-dark), 1)',

                '&:hover': {
                    color: 'rgba(var(--color-dark-hover), 1)'
                },

                '&.active': {
                    color: 'rgba(var(--color-dark-lighten), 1)',
                    '&:hover': {
                        color: 'rgba(var(--color-dark-hover), 1)'
                    }
                }
            }
        }

        addComponents(components)
    }
})
