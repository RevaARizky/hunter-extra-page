/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        '../template.php'
    ],
    corePlugins: {
        preflight: false
    },
    safelist: [
        'md:block',
        'hidden'
    ]
}