const gulp = require('gulp');
const sass = require('gulp-sass');
const sourcemaps = require('gulp-sourcemaps');
const rename = require('gulp-rename');
const cleanCSS = require('gulp-clean-css');
const uglify = require('gulp-uglify');

const copyTask = (callback) => {
    gulp.src([
        './node_modules/jquery/dist/jquery.min.*',
    ]).pipe(gulp.dest('./src/main/resources/static/js'));
    callback();
}

const sassTask = (callback) => {
    gulp.src('./src/main/resources/assets/sass/**/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(cleanCSS())
        .pipe(rename({ extname: '.min.css' }))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('./src/main/resources/static/css'));
    callback();
}

const jsTask = (callback) => {
    gulp.src('./src/main/resources/assets/js/**/*.js')
        .pipe(sourcemaps.init())
        .pipe(uglify())
        .pipe(rename({ extname: '.min.js' }))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('./src/main/resources/static/js'));
    callback();
}

const watchTask = () => {
    gulp.watch('./src/main/resources/assets/sass/**/*.scss', sassTask);
    gulp.watch('./src/main/resources/assets/js/**/*.js', jsTask);
}

exports.watch = gulp.series(copyTask, sassTask, jsTask, watchTask);
exports.default = gulp.parallel(copyTask, sassTask, jsTask);