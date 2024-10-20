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
                'body-bg4' :"url('/public/img/imagen.jpg')",
                'body-bg5' :"url('public/img/3.mp4')"
            },
        },
    },

    plugins: [
        function ({ addUtilities }) {
          addUtilities({
            '.marker-orange': {
              'li::marker': {
                color: '#F97316',
                fontSize: '1.5rem',
                with: '2rem',
              },
            },
            '.marker-zinc': {
              'li::marker': {
                color: '#434343',
                fontSize: '1.5rem',
              },
            },

          });
        },
      ],
};
