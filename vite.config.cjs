const { defineConfig } = require('vite');
const laravel = require('laravel-vite-plugin').default;
const path = require('path');

module.exports = defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '@': path.resolve(__dirname, 'resources/js'),
        },
    },
});
