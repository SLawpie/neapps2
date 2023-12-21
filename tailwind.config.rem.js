/** @type {import('tailwindcss').Config} */

// const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],

    darkMode: 'class',
    theme: {
        extend: {
            // colors: {
            //     'light-accent': '#3b82f6',
            //     'dark-accrnt': '#d946ef',
            // },
            // fontFamily: {
            //     sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            // },
        },
    },

    // variants: {
    //     extend: {},
    // },

    plugins: {
        // tailwindcss: {},
        // autoprefixer: {},
    },
};
