import postcss from 'rollup-plugin-postcss';
import resolve from '@rollup/plugin-node-resolve';
import commonjs from '@rollup/plugin-commonjs';
import sass from 'node-sass';
import terser from '@rollup/plugin-terser';
import del from 'rollup-plugin-delete';

export default [
  {
    input: 'js/script.js',
    output: {
      file: 'build/main.min.js',
      format: 'iife', ///iife /// umd
      name: 'MyModule', // Глобальное имя для вашего пакета (доступно в окружении браузера)
    },
    plugins: [
      del({ targets: 'build/*.js' }),
      resolve(), // Разрешить импорты из node_modules
      commonjs(), // Преобразовать CommonJS модули в ES6
      terser() // Минифицировать выходной JavaScript
      //terser({compress: {drop_console: true, module: true}}),
    ]
  },
  {
    input: 'scss/main.scss', // Ваш основной файл
    output: {
      file: 'build/main.min.css', // Выходной CSS файл
      format: 'esm',
    },
    plugins: [
      del({ targets: 'build/*.css' }),
      postcss({
        extract: true, // Извлечение CSS в отдельный файл
        minimize: false,
        extensions: ['.scss'], // Добавляем поддержку расширения 
        preprocessor: (content, id) => new Promise((resolve, reject) => {
          const result = sass.renderSync({ file: id });
          resolve({ code: result.css.toString() });
        }),
      }),
    ],
  },
];
