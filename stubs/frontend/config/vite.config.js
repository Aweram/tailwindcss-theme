import { defineConfig } from "vite";
import laravel, { refreshPaths } from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css", "resources/js/app.js",
                "resources/css/admin.css", "resources/js/admin.js"
            ],
            refresh: [
                ...refreshPaths,
            ]
        })
    ],
    css: {
        postcss: {
            plugins: [
                require("tailwindcss/nesting"),
                require("tailwindcss"),
                require("autoprefixer"),
            ]
        }
    }
})
