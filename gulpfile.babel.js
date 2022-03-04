import gulp from 'gulp';
import yargs from 'yargs';
import dartSass from 'sass';
import gulpSass from 'gulp-sass';
import cleanCss from 'gulp-clean-css';
import gulpif from 'gulp-if';

const sass = gulpSass(dartSass);
const PRODUCTION = yargs.argv.prod;

export const style = () => {
    return gulp.src('src/assets/scss/bundle.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulpif(PRODUCTION, cleanCss({debug: true}, (details) => {
            console.log(`${details.name}: originalSize ${details.stats.originalSize}`);
            console.log(`${details.name}: minifiedSize ${details.stats.minifiedSize}`);
        })))
        .pipe(gulp.dest('dist/assets/css'))
}
