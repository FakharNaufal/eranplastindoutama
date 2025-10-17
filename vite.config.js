import { defineConfig } from 'vite'
import laravel from 'laravel-vite-plugin'

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js'],
      refresh: true,
    }),
  ],
  build: {
        outDir: 'public/build',
        manifest: false,
    },
  server: {
    // jalankan dev server bisa diakses dari domain-mu
    host: '127.0.0.1',          // hindari [::1]
    port: 5173,
    // izinkan CORS dari domain aplikasi
    cors: {
      origin: ['http://eran_plastindo.co.id'],
      credentials: true,
    },
    // arahkan HMR supaya konek dari domain aplikasi
    hmr: {
      host: 'eran_plastindo.co.id', // atau IP/host publik yang diakses browser
      protocol: 'ws',               // gunakan 'wss' jika situsmu HTTPS
      clientPort: 5173,
    },
  }
})
