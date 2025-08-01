import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

import prelinePlugin from "preline/plugin";
/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        container: {
            center: true,
            padding: {
                DEFAULT: "1rem",
                sm: "2rem",
                lg: "4rem",
                xl: "5rem",
                "2xl": "6rem",
            },
        },
        screens: {
            sm: "640px",
            md: "768px",
            lg: "1024px",
            xl: "1280px",
            "2xl": "1536px",
            "3xl": "1800px",
        },
        extend: {
            colors: {
                primary: "#49a1c9",
                secondary: "#212529",
                background: "#eff1ff",
                texter: "#495057",
                texting: "#6c757d",
            },
            fontFamily: {
                sans: ["Montserrat", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms, prelinePlugin],
};
