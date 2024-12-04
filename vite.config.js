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
        port: 5174, // Fijar el puerto que estás usando en APP_URL
        host: true, // Para que sea accesible en tu red local
    },
});
