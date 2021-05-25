const gulp = require("gulp");
const { task, series, watch, dest } = require("gulp");
const browserSync = require("browser-sync");
const reload = browserSync.reload;
const autoprefixer = require("gulp-autoprefixer");
const rename = require("gulp-rename");
const cleanCSS = require("gulp-clean-css");
const uglify = require("gulp-uglify");
var concat = require("gulp-concat");

// Local site URL //////////////////////////////////
let local = true;

const localUrl = "http://castlehill.local/";

let localOptions = {
  proxy: localUrl,
};

let staticOptions = {
  server: {
    baseDir: "./",
  },
};
///////////////.//////////////////////////////////

task("browser-sync", (cb) => {
  browserSync.init(local ? localOptions : staticOptions);

  cb();
});

task("clean-css", () => {
  return gulp
    .src("./css/style.css")
    .pipe(autoprefixer())
    .pipe(rename({ suffix: ".min" }))
    .pipe(cleanCSS({ compatibility: "ie8" }))
    .pipe(dest("./css/"));
});

let browserReload = (cb) => {
  reload();
  cb();
};
task("compressJs", () => {
  return gulp
    .src("./js/lib/**/*.js")
    .pipe(concat("all.min.js"))
    .pipe(uglify())
    .pipe(dest("./js/dist"));
});
task("watcher", () => {
  watch("./**/*.php", browserReload);
  watch("./js/lib/**/*.js", series("compressJs", browserReload));
  watch("./css/style.css", series("clean-css", browserReload));
});

task("default", series("browser-sync", "watcher"));
