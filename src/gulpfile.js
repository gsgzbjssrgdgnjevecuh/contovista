'use strict';

const gulp = require( 'gulp' ),
      sass = require( 'gulp-sass' )( require('sass') ),
      csso = require( 'gulp-csso' ),
      autoprefixer = require( 'gulp-autoprefixer' ),
      notify = require( 'gulp-notify' ),
      plumber = require('gulp-plumber'),
      sourcemaps = require( 'gulp-sourcemaps' ),
      php  = require('gulp-connect-php'),
      concat = require( 'gulp-concat' ),
      gu = require( 'gulp-uglify-es' ).default;

// SASS
gulp.task('sass', () => {
  return gulp.src('sass/main.sass')
        .pipe(plumber({errorHandler: notify.onError("Error: <%= error.message %>")}))
        .pipe(sourcemaps.init())
        .pipe(sass({}))
        .pipe(autoprefixer({
          overrideBrowserslist: ['last 10 versions'],
          cascade: false
        }))
        .on('error', notify.onError({
          message: 'Error: <%= error.message %>',
          title: 'Style error has occurred'
        }))
        .pipe(csso())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('../static/css/'))
});

// FONTS 
gulp.task('fonts', () => {
  return gulp.src([
    'node_modules/font-awesome/fonts/*',
    'fonts/*'
  ])
    .pipe(gulp.dest('../static/fonts/'));
});


// SCRIPTS
gulp.task('scripts:lib', () => {
  return gulp.src([
    // YOU SHOULD ENABLE THIS TASK IN 'watch' TASK
      'node_modules/jquery/dist/jquery.min.js',
      'node_modules/slick-carousel/slick/slick.min.js'
  ])
    .pipe(concat('libs.min.js'))
    .pipe(gulp.dest('../static/js/'))
});

gulp.task('scripts', () => {
  return gulp.src('js/*.js')
    .pipe(plumber({errorHandler: notify.onError("Error: <%= error.message %>")}))
    .pipe(gu())
    .pipe(concat('main.js'))
    .pipe(gulp.dest('../static/js/'))
});

// IMAGES
gulp.task('img', () => {
  return gulp.src('img/**/*')
    .pipe(gulp.dest('../static/img/'));
});


// WATCHER
gulp.task('watch', () => {
  gulp.watch('sass/**/*.sass', gulp.series('sass'));
  gulp.watch('js/**/*.js', gulp.series('scripts'));
});
// DEFAULT
gulp.task('default', gulp.series(
  gulp.parallel('sass', 'scripts', 'scripts:lib', 'img', 'fonts'),
  gulp.parallel('watch')
));

