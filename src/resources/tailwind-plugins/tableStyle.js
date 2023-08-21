const plugin = require("tailwindcss/plugin")

module.exports = plugin.withOptions(function (options = {}) {
    return ({addComponents}) => {
        const components = {
            '.table-style': {
                width: '100%',
                verticalAlign: 'top',
                borderColor: 'var(--table-border-color)',
                captionSide: 'bottom',

                '> :not(caption) > * > *': {
                    padding: 'var(--table-cell-padding-y) var(--table-cell-padding-x)',
                    color: 'rgba(var(--color-body), 1)',
                    backgroundColor: 'rgba(var(--table-bg), 1)',
                    borderBottomWidth: 'var(--table-border-width)',
                    borderColor: 'var(--table-border-color)',
                },

                '> tbody': {
                    verticalAlign: 'inherit'
                },

                '> thead': {
                    verticalAlign: 'bottom',
                    borderTopWidth: 'var(--table-border-width)',
                    borderColor: 'var(--table-border-color)',
                    '> * > *': {
                        backgroundColor: 'var(--table-head-bg)',
                        color: 'rgba(var(--color-body), 1)',
                        fontWeight: 'var(--table-head-font-weight)',
                    }
                }
            },

            '.table-caption': {
                padding: 'var(--table-cell-padding-y) var(--table-cell-padding-x)',
                textAlign: 'left',
            },

            '.caption-top': {
                captionSide: 'top',
                borderBottomWidth: 'var(--table-border-width)',
                borderColor: 'var(--table-border-color)',
            }
        }

        addComponents(components)
    }
})
