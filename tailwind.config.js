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
                "label-md": ["Inter"],
                "body-md": ["Inter"],
                "display-lg-mobile": ["Inter"],
                "body-lg": ["Inter"],
                "label-caps": ["Inter"],
                "display-lg": ["Inter"],
                "headline-sm": ["Inter"],
                "headline-md": ["Inter"]
            },
            fontSize: {
                "label-md": ["14px", {"lineHeight": "20px", "letterSpacing": "0.02em", "fontWeight": "500"}],
                "body-md": ["16px", {"lineHeight": "24px", "letterSpacing": "0", "fontWeight": "400"}],
                "display-lg-mobile": ["36px", {"lineHeight": "42px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                "body-lg": ["18px", {"lineHeight": "28px", "letterSpacing": "0", "fontWeight": "400"}],
                "label-caps": ["12px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600"}],
                "display-lg": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                "headline-sm": ["24px", {"lineHeight": "32px", "letterSpacing": "0", "fontWeight": "600"}],
                "headline-md": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600"}]
            },
            colors: {
                "secondary-fixed-dim": "#cbbeff",
                "secondary": "#614cba",
                "on-error-container": "#93000a",
                "tertiary-container": "#306600",
                "on-primary-container": "#d4caff",
                "surface-container-high": "#e6e6ff",
                "on-surface": "#151936",
                "on-secondary-container": "#371b8f",
                "on-tertiary-fixed": "#0b2000",
                "on-secondary": "#ffffff",
                "tertiary-fixed-dim": "#98d869",
                "error-container": "#ffdad6",
                "on-primary": "#ffffff",
                "on-tertiary-container": "#a2e373",
                "secondary-fixed": "#e6deff",
                "inverse-on-surface": "#f0efff",
                "primary-fixed": "#e6deff",
                "inverse-surface": "#2a2e4c",
                "surface": "#fbf8ff",
                "surface-dim": "#d5d7fe",
                "secondary-container": "#a28dff",
                "surface-container": "#edecff",
                "on-primary-fixed-variant": "#4831a4",
                "inverse-primary": "#cabeff",
                "on-tertiary": "#ffffff",
                "outline": "#797584",
                "surface-container-low": "#f4f2ff",
                "primary-fixed-dim": "#cabeff",
                "on-error": "#ffffff",
                "on-surface-variant": "#484553",
                "surface-bright": "#fbf8ff",
                "background": "#fbf8ff",
                "surface-container-highest": "#dfe0ff",
                "primary": "#432b9f",
                "on-background": "#151936",
                "outline-variant": "#c9c4d5",
                "error": "#ba1a1a",
                "surface-container-lowest": "#ffffff",
                "on-tertiary-fixed-variant": "#255100",
                "on-secondary-fixed-variant": "#4931a1",
                "tertiary": "#224c00",
                "surface-tint": "#604bbd",
                "surface-variant": "#dfe0ff",
                "on-primary-fixed": "#1c0062",
                "on-secondary-fixed": "#1d0061",
                "primary-container": "#5b46b8",
                "tertiary-fixed": "#b3f582"
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
