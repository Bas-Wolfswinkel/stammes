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
            subtitle: [
                '70px',
                {
                    lineHeight: '80px',
                    fontWeight: '700',
                },
            ],
            'subtitle-2': [
                '45px',
                {
                    lineHeight: '45px',
                    fontWeight: '700',
                },
            ],
            'subtitle-3': [
                '40px',
                {
                    lineHeight: '40px',
                    fontWeight: '700',
                },
            ],
            'subtitle-4': [
                '45px',
                {
                    lineHeight: '45px',
                    fontWeight: '300',
                },
            ],
            'contact-form-label': [
                '16px',
                {
                    lineHeight: '24px',
                    fontWeight: '700',
                },
            ],
            'contact-form-checkbox-label': [
                '18px',
                {
                    lineHeight: '24px',
                    fontWeight: '400',
                },
            ],
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
            'text-1': [
                '20px',
                {
                    lineHeight: '41px',
                    fontWeight: '500',
                },
            ],
            'footer-title': [
                '16px',
                {
                    lineHeight: '30px',
                    fontWeight: '700',
                },
            ],
            '20-29-400': [
                '20px',
                {
                    lineHeight: '29px',
                    fontWeight: '400',
                },
            ],
            '19-29-300': [
                '19px',
                {
                    lineHeight: '29px',
                    fontWeight: '300',
                },
            ],
            '22-26-800': [
                '22px',
                {
                    lineHeight: '26px',
                    fontWeight: '800',
                },
            ],
            '22-26-600': [
                '22px',
                {
                    lineHeight: '26px',
                    fontWeight: '600',
                },
            ],
        },
    },
    plugins: [forms],
} satisfies Config;
