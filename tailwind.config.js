/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.{html,php,js,vue}",
    ],
    theme: {

        extend: {
            fontFamily: {
                manrope: ['Manrope', 'ui-sans-serif', 'system-ui'],
            },
            fontSize: {
                16: '16px',
                20: '20px',
                24: '24px',
                32: '32px',
                36: '36px',
                52: '52px',
            },
            lineHeight: {
                '150': '150%',
                54: '54px',
            },
            colors: {
                black: '#000',
                'logo-red': '#ED1B24',
                'primary-red': '#D12420',
                'secondary-red': '#F80000',
                'dark_brown': '#512C1F',
                'med_brown': '#786451',
                'dark_beige': '#C6B8AE',
                'med_beige': '#F1E9DA',
                'light_beige': '#F6F0EB',
            },
            backgroundImage: {
                'fade': 'linear-gradient(to top left, #311001, #5e2e0f, #d19236)',
            },
        },
    },
    plugins: [],
};
0
