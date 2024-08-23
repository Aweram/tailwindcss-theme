const plugin = require("tailwindcss/plugin")

const makeColors = (key, colorObject, textColor) => {
    let value = colorObject['DEFAULT']
    let color = value.replace('<alpha-value>', 1)
    let outlineColor = value.replace('<alpha-value>', .1)
    let hoverColor = value.replace('<alpha-value>', .75);

    if (colorObject.hasOwnProperty("hover"))
        hoverColor = colorObject['hover'].replace('<alpha-value>', 1)
    else if (colorObject.hasOwnProperty("darken"))
        hoverColor = colorObject['darken'].replace('<alpha-value>', 1)
    else if (colorObject.hasOwnProperty("lighten"))
        hoverColor = colorObject['lighten'].replace('<alpha-value>', 1)

    return {
        [`.btn-${key}`]: {
            backgroundColor: color,
            borderColor: color,
            color: textColor,
            "&:hover": {
                backgroundColor: hoverColor,
                borderColor: hoverColor
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
    let value = colors[key]
    if (typeof value === 'string') {
        return {
            ...acc,
            ...makeColors(key, {DEFAULT: value}, textColor)
        }
    }

    return {
        ...acc,
        ...makeColors(key, value, textColor)
    }
}, {})

module.exports = plugin.withOptions(function (options = {}) {
    return ({ addComponents, theme }) => {
        const components = {
            ".btn": {
                display: 'inline-flex',
                flexShrink: 0,
                justifyContent: 'center',
                alignItems: 'center',
                flexWrap: 'nowrap',
                transition: 'var(--btn-transition)',

                borderWidth: 'var(--btn-border-width)',
                borderRadius: 'var(--btn-border-radius)',
                borderStyle: "solid",

                height: 'var(--btn-height)',
                minWidth: 'var(--btn-height)',
                paddingLeft: 'var(--btn-padding-x)',
                paddingRight: 'var(--btn-padding-x)',

                fontSize: 'var(--btn-font-size)',
                lineHeight: 'var(--btn-line-height)',
                fontWeight: 'var(--btn-font-weight)',
                letterSpacing: 'var(--btn-letter-spacing)',

                "&:disabled": {
                    opacity: "0.25",
                    pointerEvents: "none"
                }
            },

            ".btn-base": {
                height: 'var(--btn-height)',
                minWidth: 'var(--btn-height)',
                fontSize: 'var(--btn-font-size)',
                lineHeight: 'var(--btn-line-height)',
                paddingLeft: 'var(--btn-padding-x)',
                paddingRight: 'var(--btn-padding-x)',
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
