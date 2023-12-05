/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,php,js}"],
  theme: {
    extend: {
      colors: {},
      fontFamily: {
        inter: ["Inter"],
        lola: ["FS Lola", "sans-serif"],
        myriad: ["Myriad Pro", "sans-serif"],
      },
    },
  },
  plugins: [],
};
