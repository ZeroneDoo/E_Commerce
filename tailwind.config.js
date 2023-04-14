/** @type {import('tailwindcss').Config} */
module.exports = {
    daisyui: {
        themes: [{
            mytheme: {

                "primary": "#e32227",

                "secondary": "#F000B8",

                "accent": "#37CDBE",

                "neutral": "#3D4451",

                "base-100": "#FFFFFF",

                "info": "#3ABFF8",

                "success": "#36D399",

                "warning": "#FBBD23",

                "error": "#F87272",
            },
        }, ],
    },
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
    },
    plugins: [require("daisyui")],
}
