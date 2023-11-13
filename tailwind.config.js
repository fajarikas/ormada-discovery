/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./*.{html,js}",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
        fontFamily: {
            body: ["Poppins"],
        },
        colors: {
            red: "#F00",
            yellow: "#FFD43A",
            darkblue: "#263044",
            "darkblue-1": "#3A4761",
            "darkblue-2": "#51607E",
            "darkblue-3": "#6A7A9C",
            "darkblue-3": "#8596B9",
            "darkblue-4": "#A2B4D6",
            "darkblue-5": "#C2D2F3",
            "darkblue-6": "#D5E1F8",
            "darkblue-7": "#E9F0FE",
            "darkblue-8": "#FAFBFF",
            white: "#FFFFFF",

            orange: "#E97656",
            "grey-1": "#FBFBFB",
            "blue-1": "#22668D",
            "lightblue-1": "#3fbffd",
            "lightblue-2": "#238bc9",
            "purple-1": "#9e119d",
            "pink-1": "#f754b3",
            "red-1": "#c9080e",
            "yellow-1": "#d8c611",
            "green-1": "#32784C",
            "green-2": "#235B38",
            "green-3": "#F4FFF8",
            "green-4": "#449562",
            "brown-1": "#c98249",
            "blue-nav": "#192947",
            "blue-hover": "#2C4169",
            "blue-link": "#0066A2",
        },
        extend: {},
        fontFamily: {
            roboto: ["Roboto", "sans-serif"],
        },
    },
    plugins: [
        // require('tailwindcss-plugins/pagination')({
        //     /* Customizations here... */
        // }),
    ],
};
