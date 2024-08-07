/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            backgroundImage: {
                "banner-image": "url('public/images/banner.jpg')",
            },

            width: {
                120: "36rem",
                custom: "50rem", // Add a custom width
            },
            height: {
                120: "36rem",
                custom: "30rem", // Add a custom height
            },
        },
    },
    plugins: [],
};
