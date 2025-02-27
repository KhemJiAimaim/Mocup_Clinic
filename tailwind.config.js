/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./resources/**/*.jsx",
        "./resources/**/*.tsx",
    ],    
    theme: {
        extend: {
            fontFamily: {
                noto: ['Noto Sans Thai', 'sans-serif'],
            },
            screens: {xx: "400px", xs: "479px", ss: "540px", xxl: "1921px" },
            colors: {
                blue: '#005DE1',
              },
        },
    },

    plugins: [],
};
