const gulp = require ('gulp');
const sass = require('gulp-sass');

gulp.task('sass', gulp.series(function(){
    return gulp.src(['node_modules/bootstrap/scss/*.scss', 'src/scss/*.scss'])
    .pipe(sass())
    .pipe(gulp.dest('src/css'))
}));