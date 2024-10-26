/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Manrope', 'sans-serif'],
            },
            colors: {
                'logo-red': '#ED1B24',
                'primary-red': ' #D12420',
                'secundary-red': '#F8000',
                'dark_brow': '#512C1F',
                'med_brown': '#786451',
                'dark_beige': '#C6B8AE',
                'med_beige': '#F1E9DA',
                'light_beige': '#F6F0EB',


            }
        },
    },
    plugins: [],
}