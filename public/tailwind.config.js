module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    screens: {
      sm: '480px',
      md: '768px',
      lg: '1080px',
      xl: '1440px',
    },



    extend: {
      fontSize: {
        'xxs': '.5rem',

      },
      gridTemplateColumns: {
        '14': 'repeat(14, minmax(0, 1fr))',
      },
      gridColumn: {
        'span-16': 'span 16 / span 16',
      },
      gridColumnStart: {
        '13': '13',
        '14': '14',
        '15': '15',
      },
      gridColumnEnd: {
        '13': '13',
        '14': '14',
        '15': '15',
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}