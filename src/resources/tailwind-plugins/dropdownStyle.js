const plugin = require("tailwindcss/plugin")

module.exports = plugin.withOptions(function (options = {}) {
    return ({addComponents}) => {
        const components = {
            '.dropdown-menu': {
                position: 'absolute',
                zIndex: 'var(--z-dropdown)',
                minWidth: 'var(--dropdown-min-width)',
                padding: 'var(--dropdown-padding-y) var(--dropdown-padding-x)',
                margin: 0,
                fontSize: 'var(--dropdown-font-size)',
                color: 'rgba(var(--dropdown-color), 1)',
                textAlign: 'left',
                backgroundColor: 'var(--dropdown-bg)',
                backgroundClip: 'padding-box',

                borderWidth: "var(--dropdown-border-width)",
                borderRadius: "var(--dropdown-border-radius)",
                borderStyle: "solid",
                borderColor: "rgba(var(--dropdown-border-color), 1)",
            }
        }

        addComponents(components)
    }
})
