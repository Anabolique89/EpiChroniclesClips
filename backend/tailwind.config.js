// tailwind.config.js
import forms from "@tailwindcss/forms"; // 👈 Tailwind v4 uses ESM syntax by default

import("tailwindcss").Config;

export default {
    content: [
        "./index.html",
        "./src/**/*.{html,js,ts,jsx,tsx,vue}", // Adjust paths for your project
    ],
    theme: {
        extend: {},
    },
    plugins: [
        forms, // 👈 Use the imported plugin
    ],
};
