import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';
import vue from '@vitejs/plugin-vue';
import { fileURLToPath, URL } from 'url'

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/js/main.js'],
            refresh: true,
        }),
        vue(),
        tailwindcss(),
    ],
    server: {
        host: 'localhost',
        port: 5173,
        proxy: {
            '/auth': {
                target: 'http://127.0.0.1:8080', // ← порт бэкенда
                changeOrigin: true
            },
            '/api': {
                target: 'http://127.0.0.1:8080', // ← порт бэкенда
                changeOrigin: true
            },
        }
    },
});
