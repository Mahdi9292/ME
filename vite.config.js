import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/profile.css', 'resources/js/profile.js'],
            refresh: true,
        }),
    ],
});
