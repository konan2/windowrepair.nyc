import postcss from 'rollup-plugin-postcss';
import resolve from '@rollup/plugin-node-resolve';
import commonjs from '@rollup/plugin-commonjs';
import sass from 'node-sass';
import terser from '@rollup/plugin-terser';
import del from 'rollup-plugin-delete';
import cssnano from 'cssnano';

export default {
  input: ['js/script.js', 'scss/main.scss'],
  output: [
    {
      file: 'build/main.min.js',
      format: 'iife', // iife or umd
      name: 'MyModule', // Global name for your package (available in the browser environment)
      sourcemap: true
    },
    {
      file: 'build/main.min.css',
      format: 'esm'
    }
  ],
  plugins: [
    del({ targets: ['build/*.js', 'build/*.map', 'build/*.css'] }), // Deleting old build files
    resolve(), // Allow imports from node_modules
    commonjs(), // Convert CommonJS modules to ES6
    terser({
      compress: { drop_console: true }, // Remove console.log()
      output: {
        comments: false, // Remove comments
      },
    }),
    postcss({
      extract: true, // Extract CSS to a separate file
      minimize: true,
      extensions: ['.scss'], // Add support for SCSS
      plugins: [
        cssnano({
          preset: ['default', { discardComments: { removeAll: true } }] // Remove all comments
        })
      ],
      preprocessor: (content, id) => new Promise((resolve, reject) => {
        const result = sass.renderSync({ file: id });
        resolve({ code: result.css.toString() });
      }),
    }),
  ],
};
