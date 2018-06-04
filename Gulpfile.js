var gulp          = require('gulp');
var browserSync   = require('browser-sync').create();
var sass          = require('gulp-sass');
var rename        = require('gulp-rename');
var concat        = require('gulp-concat');
var stripDebug    = require('gulp-strip-debug');
var uglify        = require('gulp-uglify');
var notify        = require('gulp-notify');
var autoprefixer  = require('gulp-autoprefixer');
var minifycss     = require('gulp-minify-css');
var modernizr     = require('gulp-modernizr');

// Static Server + watching scss/html files
gulp.task('serve', ['sass', 'scripts', 'modernizr'], function() {

  browserSync.init({
    server: "./",
    port: 3001
  });

  gulp.watch("src/scss/**/*.scss", ['sass']);
  gulp.watch("src/js/**/*.js", ['scripts']);
  gulp.watch("*.html").on('change', browserSync.reload);
});

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
  return gulp.src("src/scss/*.scss")
    .pipe(sass())
    .pipe(autoprefixer('last 2 version'))
    .pipe(gulp.dest("build/css"))
    .pipe(rename({ suffix: '.min' }))
    .pipe(minifycss())
    .pipe(gulp.dest('build/css'))
    .pipe(notify({ message: 'SASS Compiled' }))
    .pipe(browserSync.stream());
});

// Task to concat, strip debugging and minify JS files
gulp.task('scripts', function() {
  gulp.src(['src/js/**/*.js'])
    .pipe(concat('app.js'))
    // .pipe(stripDebug()) // uncomment this line to strip JS comments
    .pipe(uglify())
    .pipe(gulp.dest('build/js'))
    .pipe(browserSync.stream());
});

// Modernizr
gulp.task('modernizr', function() {
  var settings = { 
    "cache" : true,
    "options" : [
      "setClasses"
    ]
  };
  return gulp.src(['src/js/**/*.js', 'src/scss/**/*.scss'])
    .pipe(modernizr( 'modernizr-custom.js', settings))
    .pipe(gulp.dest("build/js/vendor"))
});

gulp.task('default', ['serve']);