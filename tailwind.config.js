const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./node_modules/flowbite/**/*.js"
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                PassionOne:['cursive',...defaultTheme.fontFamily.sans],
                nunitoSans:['Nunito Sans', ...defaultTheme.fontFamily.sans],
                nunito:['nunito',...defaultTheme.fontFamily.sans]
            },
            colors:{
                abu_muda:'#f9fbfe',
                kuning_langsat:'#ffeab6',
                merah_muda:'#ff4c5e',
                biru_langit:'#30c8d6'
            }
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('flowbite/plugin')
    ],
};