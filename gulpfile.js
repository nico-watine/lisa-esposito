var gulp = require('gulp');
var uncss = require('gulp-uncss');

gulp.task('default', function () {
    return gulp.src('css/style.css')
        .pipe(uncss({
            html: ['http://nicos-mbp.local:5757/', 'http://nicos-mbp.local:5757/upcoming-events']
        }))
        .pipe(gulp.dest('./css/opt'));
});
