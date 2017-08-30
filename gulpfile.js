var gulp = require('gulp');
var sass = require('gulp-sass');
var neat = require('node-neat').includePaths;

var paths = {
    scss: '.themes/peculiar-crossroads/sass/*.scss'
};

gulp.task('sass', function(){
  return gulp.src('themes/peculiar-crossroads/sass/style.scss')
    .pipe(sass({
            includePaths: ['styles'].concat(neat)
        })) // Using gulp-sass
    .pipe(gulp.dest('themes/peculiar-crossroads'))
});


gulp.task('watch', function(){
  gulp.watch('themes/peculiar-crossroads/sass/**/*.scss', ['sass']); 
  // Other watchers
})
