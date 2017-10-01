var gulp = require('gulp');
var sass = require('gulp-sass');
var neat = require('node-neat').includePaths;
var plumber = require('gulp-plumber');
let cleanCSS = require('gulp-clean-css');
const autoprefixer = require('gulp-autoprefixer');

var paths = {
    scss: '.themes/peculiar-crossroads/sass/*.scss'
};

gulp.task('sass', function(){
  return gulp.src('themes/peculiar-crossroads/sass/style.scss')
    .pipe(plumber())
    .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
    .pipe(sass({
            includePaths: ['styles'].concat(neat)
        })) // Using gulp-sass
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(gulp.dest('themes/peculiar-crossroads'));
});

gulp.task('watch', function(){
  gulp.watch('themes/peculiar-crossroads/sass/**/*.scss', ['sass']);
  // Other watchers
});
