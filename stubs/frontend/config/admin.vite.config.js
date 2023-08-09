import { defineConfig } from "vite";
import laravel, { refreshPaths } from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/admin.css", "resources/js/admin.js"
            ],
            refresh: [
                ...refreshPaths,
            ],
            buildDirectory: "/adminAssets"
        })
    ],
    css: {
        postcss: {
            plugins: [
                require("tailwindcss/nesting"),
                require("tailwindcss")({
                    config: "./admin-tailwind.config.js",
                }),
                require("autoprefixer"),
            ]
        }
    }
})
