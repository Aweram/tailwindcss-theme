const plugin = require("tailwindcss/plugin")

module.exports = plugin.withOptions(function (options = {}) {
    return ({addComponents}) => {
        const components = {
            '.row': {
                display: 'flex',
                margin: '0 calc(var(--indent-half) * -1)',
                flexWrap: 'wrap'
            },
            '.col': {
                padding: '0 var(--indent-half)',
                flex: '0 0 auto'
            }
        }

        addComponents(components)
    }
})
