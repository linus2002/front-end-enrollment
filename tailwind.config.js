import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
  ],

  theme: {
    extend: {
      colors: {
        primary: '#164A41',
        light: '#FBFCF8',
        dark: '#262424',
        yellow: '#F1B24A',
        'lime-green': '#9DC88D',
        'moss-green': '#A2B568',
        'light-gray': '#f1f1f1',
      },
      // Adding custom logo size
      spacing: {
        'logo': '5rem', // Custom size for logo (width & height)
        'icon': '2rem', // Custom size for icons (width & height)
      },
      // Adding custom font family (Poppins)
      fontFamily: {
        poppins: ['Poppins', 'sans-serif'],
      },
    },
  },

  plugins: [forms],
};
