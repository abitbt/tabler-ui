import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/app.scss',
                'resources/scss/demo.scss',
                'resources/js/app.js',
                'resources/js/demo.js',
            ],
            refresh: true,
        }),
    ],
});
