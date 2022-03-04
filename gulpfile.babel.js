import gulp from 'gulp';
import yargs from 'yargs';
import dartSass from 'sass';
import gulpSass from 'gulp-sass';
import cleanCss from 'gulp-clean-css';
import gulpif from 'gulp-if';
import sourcemaps from 'gulp-sourcemaps';

const sass = gulpSass(dartSass);
const PRODUCTION = yargs.argv.prod;

const paths = {
    styles: {
        src: ['src/assets/scss/bundle.scss', 'src/assets/scss/admin.scss'],
        dest: 'dist/assets/css',
        watch: 'src/assets/scss/**/*.scss'
    }
}

export const styles = () => {
    return gulp.src(paths.styles.src)
        .pipe(gulpif(!PRODUCTION, sourcemaps.init()))
        .pipe(sass().on('error', sass.logError))
        .pipe(gulpif(PRODUCTION, cleanCss({debug: true}, (details) => {
            console.log(`${details.name}: originalSize ${details.stats.originalSize}`);
            console.log(`${details.name}: minifiedSize ${details.stats.minifiedSize}`);
        })))
        .pipe(gulpif(!PRODUCTION, sourcemaps.write()))
        .pipe(gulp.dest(paths.styles.dest))
}

export const watch = () => {
    gulp.watch(paths.styles.watch, styles)
}