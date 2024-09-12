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
            fontFamily: {
                "hanken-grotesk": ["Hanken Grotest", "sans-serif"],
            },
            fontSize: {
                "2xs": ".625rem",
            },
        },
    },
    important: true,
    plugins: [],
} satisfies Config;
