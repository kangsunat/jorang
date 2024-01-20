/** @type {import('tailwindcss').Config} */
module.exports = {
  important: true,
  content: ["./*.{html,js,scss,php,css}"],
  theme: {
    extend: {
      container: {
        center: true,
        padding: "12rem",
      },
    },
  },
  plugins: [require("@tailwindcss/forms")],
};
