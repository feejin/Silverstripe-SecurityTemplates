/**
 * Gulp file for handling scss updates
 *
 * -------------------------
 * Tasks
 * -------------------------
 * - gulp watch [ Watches the scss/login.scss file for changes and automatically compiles to login.css ]
 * - gulp css [ Run a single css compilation ]
 */

const gulp = require('gulp');
const sass = require('gulp-sass');
const plumber = require('gulp-plumber');
const postcss = require('gulp-postcss');
const scsslint = require('gulp-scss-lint');
const autoprefix = require('gulp-autoprefixer');
const watch = require('gulp-watch');
const cssnano = require('gulp-cssnano');
const sortCSSmq = require('sort-css-media-queries');
const mqpacker = require('css-mqpacker');
const SOURCE_FILE = 'scss/login.scss';
const CSS_DEST = 'css/';

/**
 * Linter task - keeps things tidy
 */
gulp.task('scss-lint', function() {
    return gulp.src(SOURCE_FILE)
        .pipe(plumber())
        .pipe(scsslint({
            'config': '.scss-lint.yml'
        }));
});

/**
 * Main CSS compilation task
 */
gulp.task('css', ['scss-lint'], function() {
    const mediaQueryPacker = mqpacker({
		sort: sortCSSmq
    });

    return gulp.src(SOURCE_FILE)
        .pipe(plumber())
        .pipe(sass())
        .pipe(postcss([mediaQueryPacker]))
        .pipe(autoprefix({
            browsers: ['last 2 versions']
        }))
        .pipe(cssnano({
            autoprefixer: false,
            mergeRules: true
        }))
        .pipe(gulp.dest(CSS_DEST))
});

/**
 * Watch task ಠ_ಠ
 */
gulp.task('watch', function() {
    watch(SOURCE_FILE, function() {
        gulp.start('css');
    })
});
