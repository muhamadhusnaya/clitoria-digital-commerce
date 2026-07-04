import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    darkMode: 'class', // Enable class-based dark mode
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: '#432B9F',
                'primary-container': '#5B46B8',
                secondary: '#614CBA',
                'secondary-container': '#A28DFF',
                tertiary: '#224C00',
                'tertiary-container': '#306600',
                'tertiary-fixed': '#B3F582',
                'tertiary-fixed-dim': '#98D869',
                error: '#BA1A1A',
                'error-container': '#FFDAD6',
                background: '#FBF8FF',
                surface: '#FBF8FF',
                'surface-dim': '#D5D7FE',
                'surface-bright': '#FBF8FF',
                'surface-container-lowest': '#FFFFFF',
                'surface-container-low': '#F4F2FF',
                'surface-container': '#EDECFF',
                'surface-container-high': '#E6E6FF',
                'surface-container-highest': '#DFE0FF',
                'on-surface': '#151936',
                'on-surface-variant': '#484553',
                outline: '#797584',
                'outline-variant': '#C9C4D5',
            },
            spacing: {
                'margin-desktop': '64px',
                'margin-mobile': '20px',
                'section-gap-desktop': '120px',
                'section-gap-mobile': '80px',
                'gutter': '24px',
            },
            maxWidth: {
                'container-max': '1280px',
            },
            borderRadius: {
                'sm': '0.5rem', // 8px
                DEFAULT: '1rem', // 16px
                'md': '1.5rem', // 24px
                'lg': '2rem', // 32px
                'xl': '3rem', // 48px
                'full': '9999px',
            },
            boxShadow: {
                'soft-shadow': '0 10px 30px -5px rgba(21, 25, 54, 0.04)',
                'premium': '0 10px 30px rgba(31, 35, 64, 0.04)',
            },
        },
    },

    plugins: [forms],
};
