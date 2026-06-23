import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Inter", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                "bg-primary": "#f8fafc",
                "bg-secondary": "#ffffff",
                "bg-card": "#ffffff",
                "bg-hover": "#f1f5f9",
                accent: "#0ea5e9",
                "accent-light": "#06b6d4",
                "accent-glow": "rgba(6,182,212,.15)",
                "success-custom": "#10b981",
                "warning-custom": "#f59e0b",
                "danger-custom": "#ef4444",
                "text-primary": "#0f172a",
                "text-muted": "#64748b",
                "border-custom": "#e2e8f0",
            },
            spacing: {
                "sidebar-w": "260px",
            },
        },
    },

    plugins: [forms],
};
