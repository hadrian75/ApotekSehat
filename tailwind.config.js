/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["*/*.{html,js,php}"],
   theme: {
     extend: {
      backgroundImage: {
        'indexMedPattern' : "url('public/img/PatternMed.png')",
        'bg-vignette' : "linear-gradient(to bottom right, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.2))"
      }

     },
},

   plugins: [],
}