var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var rename = require('gulp-rename');
var uglify = require('gulp-uglify');
var minifyCSS = require('gulp-clean-css');
var cssmin = require('gulp-cssmin');

var jsResultName = 'main.js';
var jsResultMinName = 'main.min.js';

gulp.task('css', function () {
    return gulp.src('src/scss/style.scss')
        .pipe(sass())
        .pipe(concat('style.css'))
        .pipe(gulp.dest('assets/css/'));
});

gulp.task('js', function () {
    return gulp.src([
        'src/js/*.js'
    ])
        .pipe(concat(jsResultName))
        .pipe(gulp.dest('assets/js/'));
});

gulp.task('watch', function () {
    gulp.watch('src/scss/*.scss', ['css']);
    gulp.watch('src/js/*.js', ['js']);
});

gulp.task('minify_js', function () {
    return gulp.src('assets/js/' + jsResultName)
        .pipe(uglify())
        .pipe(concat(jsResultMinName))
        .pipe(gulp.dest('assets/js'));
});

gulp.task('minify_css', function () {
    return gulp.src('assets/css/style.css')
        .pipe(minifyCSS({compatibility: 'ie8'}))
        .pipe(concat('style.min.css'))
        .pipe(gulp.dest('assets/css'));
});

gulp.task('default', ['css', 'js', 'watch']);
gulp.task('prod', ['css', 'js', 'minify_js', 'minify_css']);
gulp.task('dev', ['css', 'js', 'watch']);