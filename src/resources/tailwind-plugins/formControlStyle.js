const plugin = require("tailwindcss/plugin")

module.exports = plugin.withOptions(function (options = {}) {
    return ({ addComponents }) => {
        const components = {
            ".form-control": {
                display: "inline-flex",
                justifyContent: "center",
                alignItems: "center",
                flexWrap: "nowrap",
                transition: 'var(--input-transition)',

                backgroundColor: "rgba(var(--input-bg), 1)",
                backgroundClip: "padding-box",

                borderWidth: "var(--input-border-width)",
                borderRadius: "var(--input-border-radius)",
                borderStyle: "solid",
                borderColor: "rgba(var(--input-border-color), 1)",

                height: "var(--input-height)",
                width: "100%",
                minWidth: "var(--input-height)",
                paddingLeft: "var(--input-padding-x)",
                paddingRight: "var(--input-padding-x)",

                fontSize: "var(--input-font-size)",
                lineHeight: "var(--input-line-height)",
                fontWeight: "var(--input-font-weight)",
                letterSpacing: ".1em",
                color: "var(--input-color)",

                appearance: "none", // Fix appearance for date inputs in Safari

                '&[type="file"]': {
                    overflow: "hidden",

                    '&:not(:disabled):not([readonly])': {
                        cursor: "pointer"
                    }
                },

                '&:focus': {
                    color: "rgba(var(--input-color), 1)",
                    backgroundColor: "rgba(var(--input-focus-bg), 1)",
                    borderColor: "rgba(var(--input-focus-border-color), 1)",
                    outline: 0,
                },

                '&::-webkit-date-and-time-value': {
                    minWidth: "85px",
                    margin: 0,
                },

                '&::-webkit-datetime-edit': {
                    display: 'inline-flex',
                    padding: 0,
                },

                '&::placeholder': {
                    color: "rgba(var(--input-placeholder-color), 1)",
                    opacity: 1
                },

                '&:disabled': {
                    backgroundColor: "rgba(var(--input-disabled-bg), 1)",
                    opacity: 1
                },

                '&::file-selector-button': {
                    display: "inline-flex",
                    justifyContent: "center",
                    alignItems: "center",
                    flexWrap: "nowrap",

                    height: "var(--input-height)",
                    paddingLeft: "var(--input-padding-x)",
                    paddingRight: "var(--input-padding-x)",
                    paddingBottom: "var(--input-file-padding-fix)",
                    marginLeft: "calc(var(--input-padding-x) * -1)",
                    marginRight: "calc(var(--input-padding-x) * -1)",
                    marginInlineEnd: "var(--input-padding-x)",

                    fontSize: "var(--input-font-size)",
                    lineHeight: "var(--input-line-height)",
                    fontWeight: "var(--input-font-weight)",
                    letterSpacing: ".1em",
                    color: "var(--input-color)",

                    pointerEvents: "none",
                    borderColor: "inherit",
                    borderStyle: "solid",
                    borderWidth: 0,
                    borderInlineEndWidth: "var(--input-border-width)",
                    borderRadius: 0,
                    transition: "var(--btn-transition)"
                }
            },

            'textarea': {
                '&.form-control': {
                    minHeight: "var(--input-height)",
                    paddingTop: "var(--input-textarea-padding-y)",
                    paddingBottom: "var(--input-textarea-padding-y)",
                },
                '&.form-control-sm': {
                    minHeight: "var(--input-height-sm)",
                    paddingTop: "var(--input-textarea-padding-y-sm)",
                    paddingBottom: "var(--input-textarea-padding-y-sm)",
                },
                '&.form-control-lg': {
                    minHeight: "var(--input-height-lg)",
                    paddingTop: "var(--input-textarea-padding-y-lg)",
                    paddingBottom: "var(--input-textarea-padding-y-lg)",
                }
            },

            ".form-control-sm": {
                height: "var(--input-height-sm)",
                paddingLeft: "var(--input-padding-x-sm)",
                paddingRight: "var(--input-padding-x-sm)",
                fontSize: "var(--input-font-size-sm)",
                lineHeight: "var(--input-line-height-sm)",
                '&::file-selector-button': {
                    height: "var(--input-height-sm)",
                    paddingLeft: "var(--input-padding-x-sm)",
                    paddingRight: "var(--input-padding-x-sm)",
                    marginLeft: "calc(var(--input-padding-x-sm) * -1)",
                    marginRight: "calc(var(--input-padding-x-sm) * -1)",
                    marginInlineEnd: "var(--input-padding-x-sm)",
                    fontSize: "var(--input-font-size-sm)",
                    lineHeight: "var(--input-line-height-sm)",
                }
            },

            ".form-control-lg": {
                height: "var(--input-height-lg)",
                paddingLeft: "var(--input-padding-x-lg)",
                paddingRight: "var(--input-padding-x-lg)",
                fontSize: "var(--input-font-size-lg)",
                lineHeight: "var(--input-line-height-lg)",
                '&::file-selector-button': {
                    height: "var(--input-height-lg)",
                    paddingLeft: "var(--input-padding-x-lg)",
                    paddingRight: "var(--input-padding-x-lg)",
                    marginLeft: "calc(var(--input-padding-x-lg) * -1)",
                    marginRight: "calc(var(--input-padding-x-lg) * -1)",
                    marginInlineEnd: "var(--input-padding-x-lg)",
                    fontSize: "var(--input-font-size-lg)",
                    lineHeight: "var(--input-line-height-lg)",
                }
            }
        }

        addComponents(components)
    }
})
