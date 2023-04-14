import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';
 
export default defineConfig({
    host: '0.0.0.0', 
    hmr: { host: 'localhost' }, 
    plugins: [
        laravel(['resources/js/app.jsx', 'resources/css/app.css']),
        react(),
    ],
    resolve: {
        alias: {
            '@': '/resources/js',
        },
    },
});