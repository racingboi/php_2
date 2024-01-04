import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/admin.css",
                "resources/js/admin.js",
                "resources/css/app.css",
                "resources/js/app.js",
            ],
            refresh: true,
            // other plugin options...
        }),
    ],
});
