var gulp = require("gulp"),
  sass = require("gulp-sass");

function style() {
  return gulp
    .src("assets/scss/**/*.scss")
    .pipe(sass())
    .on("error", sass.logError)
    .pipe(gulp.dest("./"));
}

function watch() {
  style();
  gulp.watch("assets/scss/**/*.scss", gulp.series(["style"]));
}

exports.style = style;
exports.watch = watch;
