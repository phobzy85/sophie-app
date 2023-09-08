/** @type {import('tailwindcss').Config} */
export default {
    mode: "jit",
    darkMode: "class",
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                accent: {
                    50: "#e8f1ff",
                    100: "#d6e5ff",
                    200: "#b5ceff",
                    300: "#88acff",
                    400: "#597cff",
                    500: "#344cff",
                    600: "#1119ff",
                    700: "#070bfb",
                    800: "#090fb9",
                    900: "#121a9d",
                    950: "#0b0e5b",
                },
            },
        },
    },
    plugins: [],
};
