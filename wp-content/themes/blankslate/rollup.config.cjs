import postcss from 'rollup-plugin-postcss';
import sass from 'node-sass';

export default [
  {
    input: 'js/script.js',
    output: {
      file: 'build/main.min.js',
      format: 'esm',
    }
  },
  {
    input: 'sass/main.sass', // Ваш основной Sass файл
    output: {
      file: 'build/main.min.css', // Выходной CSS файл
      format: 'esm',
    },
    plugins: [
      postcss({
        extract: true, // Извлечение CSS в отдельный файл
        minimize: true,
        extensions: ['.sass'], // Добавляем поддержку расширения .scss
        preprocessor: (content, id) => new Promise((resolve, reject) => {
          const result = sass.renderSync({ file: id });
          resolve({ code: result.css.toString() });
        }),
      }),
    ],
  },
];
