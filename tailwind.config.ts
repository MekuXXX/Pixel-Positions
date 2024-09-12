import type { Config } from "tailwindcss";

export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                black: "#060606",
            },
        },
    },
    plugins: [],
} satisfies Config;
