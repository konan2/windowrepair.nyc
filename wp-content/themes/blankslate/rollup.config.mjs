import postcss from 'rollup-plugin-postcss';
import resolve from '@rollup/plugin-node-resolve';
import commonjs from '@rollup/plugin-commonjs';
import sass from 'node-sass';
import terser from '@rollup/plugin-terser';
import del from 'rollup-plugin-delete';
import cssnano from 'cssnano';

export default [
  {
    input: 'js/script.js',
    output: {
      file: 'build/main.min.js',
      format: 'iife', ///iife /// umd
      name: 'MyModule', // Глобальное имя для вашего пакета (доступно в окружении браузера)
      sourcemap: true
    },
    plugins: [
      del({ targets: ['build/*.js', 'build/*.map'] }),
      resolve(), // Разрешить импорты из node_modules
      commonjs(), // Преобразовать CommonJS модули в ES6
      terser({
        compress: { drop_console: true }, // удалять console.log()
        output: {
          comments: false, // Удаляем комментарии
        },
      }),
    ],
  },
  {
    input: 'scss/main.scss', // Ваш основной файл
    output: {
      file: 'build/main.min.css', // Выходной CSS файл
      format: 'esm'
    },
    plugins: [
      del({ targets: 'build/*.css' }),
      postcss({
        extract: true, // Извлечение CSS в отдельный файл
        minimize: true,
        extensions: ['.scss'], // Добавляем поддержку расширения 
        plugins: [
          cssnano({
            preset: ['default', { discardComments: { removeAll: true } }] // Настройка для удаления всех комментариев
          })
        ],
        preprocessor: (content, id) => new Promise((resolve, reject) => {
          const result = sass.renderSync({ file: id });
          resolve({ code: result.css.toString() });
        }),
      }),
    ],
  },
];