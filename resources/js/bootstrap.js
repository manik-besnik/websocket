// Import required libraries
import axios from 'axios';
import Echo from 'laravel-echo';
import Pusher from 'pusher-js';

// Set up axios to automatically send CSRF token headers
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// Initialize Echo for Pusher with proper configuration


window.Pusher = Pusher;

if (import.meta.env.VITE_BROADCAST_DRIVER !== undefined && import.meta.env.VITE_BROADCAST_DRIVER === "reverb") {
    window.Echo = new Echo({
        broadcaster: "reverb",
        key: import.meta.env.VITE_REVERB_APP_KEY,
        wsHost: import.meta.env.VITE_REVERB_HOST,
        wsPort: import.meta.env.VITE_REVERB_PORT ?? 80,
        wssPort: import.meta.env.VITE_REVERB_PORT ?? 443,
        forceTLS: (import.meta.env.VITE_REVERB_SCHEME ?? "https") === "https",
        enabledTransports: ["ws", "wss"],
    });
}

