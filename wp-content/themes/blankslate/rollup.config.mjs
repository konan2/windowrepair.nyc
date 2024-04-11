import postcss from 'rollup-plugin-postcss';
import sass from 'node-sass';
import { terser } from "rollup-plugin-minification";

export default [
  {
    input: 'js/script.js',
    output: {
      file: 'build/main.min.js',
      format: 'umd',
      name: 'MyModule',
      globals: {
        swiper: 'Swiper'
      }
    },
    plugins: [
      terser({compress: {drop_console: true, module: true}}),

      // Другие плагины Rollup, которые у вас уже есть, если есть
      //autoReload, // Добавляем плагин автоматической перезагрузки
    ]
  },
  {
    input: 'scss/main.scss', // Ваш основной Sass файл
    output: {
      file: 'build/main.min.css', // Выходной CSS файл
      format: 'esm',
    },
    plugins: [
      
      postcss({
        extract: true, // Извлечение CSS в отдельный файл
        minimize: false,
        extensions: ['.scss'], // Добавляем поддержку расширения .sass
        preprocessor: (content, id) => new Promise((resolve, reject) => {
          const result = sass.renderSync({ file: id });
          resolve({ code: result.css.toString() });
        }),
      }),
    ],
  },
];
