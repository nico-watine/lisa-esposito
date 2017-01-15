var gulp = require('gulp');
var uncss = require('gulp-uncss');
var cssnano = require('gulp-cssnano');

gulp.task('default', function () {
    return gulp.src('css/style.css')
        .pipe(uncss({
            html: ['http://nicos-mbp.local:5757/', 'http://nicos-mbp.local:5757/upcoming-events']
        }))
        .pipe(cssnano())
        .pipe(gulp.dest('./css/opt'));
});
