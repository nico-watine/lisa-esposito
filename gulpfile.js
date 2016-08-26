var gulp = require('gulp');
var uncss = require('gulp-uncss');

gulp.task('default', function () {
    return gulp.src('site.css')
        .pipe(uncss({
            html: ['index.html', 'posts/**/*.html', 'http://example.com']
        }))
        .pipe(gulp.dest('./out'));
});