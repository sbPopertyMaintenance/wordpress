var gulp = require('gulp');
var uglify = require('gulp-uglify');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
var rename = require('gulp-rename');

var cleanCSS = require('gulp-clean-css'); //minifies css
var concat = require('gulp-concat'); //joins multiple files into one

var paths = {
  images: 'images/*',
  images_dest: 'dist/img',
  sass: 'scss/**/*.scss',
  css_dest: 'dist/css',
  js: 'js/*.js',
  js_dest: 'dist/js'
};

gulp.task('sass',() => {
    return gulp.src(paths.sass)
      .pipe(sourcemaps.init())
      .pipe(sass({
        outputStyle: 'compressed'
      }).on('error', sass.logError))
      .pipe(cleanCSS({compatibility: 'ie11'}))
      .pipe(sourcemaps.write())
      .pipe(gulp.dest(paths.css_dest));
  });

gulp.task('uglify', function() {
  gulp.src(paths.js)
    .pipe(uglify('main.js'))
    .pipe(rename({
      suffix: '.min'
    }))
    .pipe(gulp.dest(paths.js_dest));
});

gulp.task('watch', function() {
  gulp.watch('scss/**/*.scss', ['sass']);
  gulp.watch('js/main.js', ['uglify']);
});