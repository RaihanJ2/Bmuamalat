/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,php,js}"],
  theme: {
    extend: {
      colors: {
        bgt: "#EEEEEE",
      },
      fontFamily: {
        lola: ["FS Lola", "sans-serif"],
      },
    },
  },
  plugins: [],
};
