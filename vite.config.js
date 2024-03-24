import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        origin: `http://localhost:${process.env.VITE_PORT}`,
        host: '0.0.0.0',
        port: process.env.VITE_PORT,
    },
});
