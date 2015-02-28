var gulp = require('gulp'),
    sass = require('gulp-sass')
    sourcemaps = require('gulp-sourcemaps')
    filter = require('gulp-filter'),
    browsersync = require('browser-sync'),
    reload = browsersync.reload;

var sass_files = [
    './src/sass/*.sass',
    './src/sass/*.scss'
  ]

gulp.task('sass', function() {
  return gulp.src(sass_files)
    .pipe(sourcemaps.init())
    .pipe(sass({
      errLogToConsole: true,
      indentedSyntax: true
    }))
    .pipe(sourcemaps.write('./maps/'))
    .pipe(gulp.dest('./assets/css/'))
    .pipe(filter('**/*.css'))
    .pipe(browsersync.reload({ stream: true }));
})

gulp.task('browser-sync', function() {
  browsersync();
});

gulp.task('dev', [
  'sass',
  'browser-sync'
]);

gulp.task('default', ['dev'], function() {
  gulp.watch(sass_files, ['sass']);
})
