import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                'satoshi': ['Satoshi', 'sans-serif'],
            },
            backgroundImage: {
                'body-bg': "url('/public/img/bglogin.png')",
                'body-bg2' :"url('/public/img/slider-2.jpg')",
                'body-bg3' :"url('/public/img/gal1_20210417030436.jpg')",
            },
        },
    },

    plugins: [forms, typography],
};
