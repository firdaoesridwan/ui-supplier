/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/**/**/*.blade.php",
        "./resources/**/**/**/*.js",
        "./resources/**/**/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                inter: ["Inter", "sans-serif"], // cara pemakaian : class = "font-inter"
            },
        },
    },
    plugins: [],
};
