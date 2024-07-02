// https://tailwindcss.com/docs/configuration
import type { Config } from 'tailwindcss';
import forms from '@tailwindcss/forms';

export default {
    content: ['./app/**/*.php', './resources/**/*.{php,js,ts,tsx,vue}', './resources/views/**/*.php', './public/content/themes/radicle/index.php'],
    theme: {
        extend: {
            padding: {
                button: '5px 15px',
            },
            borderRadius: {
                button: '6px',
            },
        },
        colors: {
            inherit: 'inherit',
            current: 'currentColor',
            transparent: 'transparent',
            black: '#000',
            white: '#fff',
            gold: '#BE8A16',
            'gold-2': '#E0B860',
            hoverGold: '#997512',
            green: '#13565E',
            'light-green': '#ADCECA',
            'dark-green': '#4B847D',
        },
        fontFamily: {
            lato: ['Lato', 'sans-serif'],
        },
        fontSize: {
            button: [
                '16px',
                {
                    lineHeight: '30px',
                    fontWeight: '400',
                },
            ],
            body: [
                '16px',
                {
                    lineHeight: '24px',
                    fontWeight: '300',
                },
            ],
            'footer-title': [
                '16px',
                {
                    lineHeight: '30px',
                    fontWeight: '700',
                },
            ],
        },
    },
    plugins: [forms],
} satisfies Config;
