module.exports = {
  content: [
    "./*.{php,html,js}",
    "./home.php"
  ],
  theme: {
    minHeight: {
      'card': '19vh',
      'full': '100vh',
      '7/10': '70vh'
    }
    ,
    maxWidth:{
      '1/2': '50vw',
      '2/3':'66vw'
    },
  
    minWidth:{
      '1/2': '50vw',
      '2/3':'66vw'
    },
    
    extend: {

      fontFamily: {
        afasha: ['Splash', 'cursive'],
      }
    },
  },
  plugins: [],
}