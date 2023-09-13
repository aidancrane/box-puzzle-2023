import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/css/styles.css",
                "resources/js/script.js",
            ],
            refresh: true,
        }),
    ],
    server: {
        hmr: {
            host: '127.0.0.1',
        },
    watch: {
        usePolling: true, // Enable polling for file changes
        interval: 1000,   // Polling interval in milliseconds
      },
}, 
});
