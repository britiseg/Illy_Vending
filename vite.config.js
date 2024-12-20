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
        host: '0.0.0.0', // Cambia 'localhost' a '0.0.0.0'
        port: 5173,
        hmr: {
            host: 'localhost', // Mantén localhost para HMR
        },
    },
    resolve: {
        alias: {
            'intl-tel-input': '/node_modules/intl-tel-input/build/js/intlTelInput.js',
        },
    },
    build: {
        sourcemap: false,
    }

});