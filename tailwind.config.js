import defaultTheme from 'tailwindcss/defaultTheme'
import forms from '@tailwindcss/forms'
import lineClamp from '@tailwindcss/line-clamp'
import aspectRatio from '@tailwindcss/aspect-ratio'

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
  ],

  theme: {
    extend: {
      fontFamily: {
        sans: ['Figtree', ...defaultTheme.fontFamily.sans],
      },
      keyframes: {
        'slide-left': {
          from: { transform: 'translateX(0)' },
          to: { transform: 'translateX(-100%)' },
        },
      },
      animation: {
        'slide-left-infinite': 'slide-left 15s linear infinite',
      },
    },
  },

  plugins: [
    forms,
    lineClamp,
    aspectRatio,
  ],
}
