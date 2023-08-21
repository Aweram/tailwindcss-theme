const plugin = require("tailwindcss/plugin")

module.exports = plugin.withOptions(function (options = {}) {
    return ({addComponents}) => {
        const components = {
            '.beautify-scrollbar': {
                '&': {
                    scrollbarWidth: 'thin',
                    scrollbarColor: 'var(--scrollbar-color) transparent',
                },

                '&::-webkit-scrollbar': {
                    width: '6px'
                },

                '&::-webkit-scrollbar-track': {
                    background: 'transparent'
                },

                '&::-webkit-scrollbar-thumb': {
                    backgroundColor: 'var(--scrollbar-color)',
                    borderRadius: '20px',
                    border: '3px solid var(--scrollbar-color)'
                }
            }
        }

        addComponents(components)
    }
})
