var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
// var minifyCss = require('gulp-minify-css');
// var gutil = require('gulp-util');
var notify = require('gulp-notify');
var browserSync = require('browser-sync').create();

gulp.task('sass', function () {
  return gulp.src('./sass/styles.scss')
    .pipe(sourcemaps.init())
    .pipe(sass({ outputStyle: 'expanded' }).on('error', sass.logError))
    .pipe(autoprefixer('last 2 version'))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('./css'))
    // .pipe(notify('SASS Compilado Correctamente'))
    .pipe(browserSync.reload({stream: true}));
});

gulp.task('serve', function() {
	browserSync.init({
		proxy: "www.ohana.app",
        open: false
	});    

	gulp.watch('./**/*.php').on('change', browserSync.reload);
});

gulp.task('default', function() {
    gulp.run('sass');
    gulp.run('serve');

    gulp.watch('sass/**/*.scss', function() {
        gulp.run('sass');
    });
});