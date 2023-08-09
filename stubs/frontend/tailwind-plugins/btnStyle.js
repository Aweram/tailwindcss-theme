const plugin = require("tailwindcss/plugin")

const makeColors = (key, value, textColor) => {
    let color = value.replace('<alpha-value>', 1)
    let lightColor = value.replace('<alpha-value>', .75)
    let outlineColor = value.replace('<alpha-value>', .1)
    return {
        [`.btn-${key}`]: {
            backgroundColor: color,
            borderColor: color,
            color: textColor,
            "&:hover": {
                backgroundColor: lightColor,
                borderColor: lightColor
            }
        },
        [`.btn-outline-${key}`]: {
            backgroundColor: 'transparent',
            borderColor: color,
            color: color,
            "&:hover": {
                backgroundColor: outlineColor
            }
        }
    }
}
const addColors = (colors, themeColors) => Object.keys(themeColors).reduce((acc, key) => {
    let textColor = themeColors[key] === 'light' ?
            colors['white'].replace('<alpha-value>', 1) :
            colors['body'].replace('<alpha-value>', 1)
    if (typeof colors[key] === 'string') {
        let value = colors[key]
        return {
            ...acc,
            ...makeColors(key, value, textColor)
        }
    }
    return {}
}, {})

module.exports = plugin.withOptions(function (options = {}) {
    return ({ addComponents, theme }) => {
        const components = {
            ".btn": {
                display: 'inline-flex',
                justifyContent: 'center',
                alignItems: 'center',
                flexWrap: 'nowrap',
                borderWidth: 'var(--btn-border-width)',
                letterSpacing: '0.1em',
                transition: 'var(--btn-transition)',
                borderRadius: 'var(--btn-border-radius)',

                height: 'var(--btn-height)',
                minWidth: 'var(--btn-height)',
                fontSize: 'var(--btn-font-size)',
                lineHeight: 'var(--btn-line-height)',
                paddingLeft: 'var(--btn-padding-x)',
                paddingRight: 'var(--btn-padding-x)',

                "&:disabled": {
                    opacity: "0.25",
                    pointerEvents: "none"
                }
            },

            ".btn-lg": {
                height: 'var(--btn-height-lg)',
                minWidth: 'var(--btn-height-lg)',
                fontSize: 'var(--btn-font-size-lg)',
                lineHeight: 'var(--btn-line-height-lg)',
                paddingLeft: 'var(--btn-padding-x-lg)',
                paddingRight: 'var(--btn-padding-x-lg)',
            },

            ".btn-sm": {
                height: 'var(--btn-height-sm)',
                minWidth: 'var(--btn-height-sm)',
                fontSize: 'var(--btn-font-size-sm)',
                lineHeight: 'var(--btn-line-height-sm)',
                paddingLeft: 'var(--btn-padding-x-sm)',
                paddingRight: 'var(--btn-padding-x-sm)',
            }
        }

        addComponents(components)
        const colors = addColors(theme('colors'), theme('themeColors'))
        addComponents(colors)
    }
})
