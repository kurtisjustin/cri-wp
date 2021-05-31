"use strict";

// Base directories (need to change for production)
const dir = {
    src: "src/",
    build: "./../../../wp-content/themes/cri/"
};


// When running locally, put the bath to the site here to allow for browsersync reloading
const localDevelopmentProxy = "localhost/cri-wp"

const gulp = require("gulp");
const gutil = require("gulp-util");
const newer = require("gulp-newer");
const imagemin = require("gulp-imagemin");
const sass = require("gulp-sass");
const postcss = require("gulp-postcss");
const deporder = require("gulp-deporder");
const concat = require("gulp-concat");
const stripdebug = require("gulp-strip-debug");
const uglify = require("gulp-uglify");
const { watch } = require("browser-sync");
const browsersync = require('browser-sync').create();

// php directories and task
const php = {
    src: dir.src + "template/**/*.php",
    build: dir.build
};
function phpTask() {
    return gulp.src(php.src)
        .pipe(newer(php.build))
        .pipe(gulp.dest(php.build));
}


// Image directories and task
const images = {
    src: dir.src + "images/**/*",
    build: dir.build + "images/"
};
function imagesTask() {
    return gulp.src(images.src)
        .pipe(newer(images.build))
        .pipe(imagemin())
        .pipe(gulp.dest(images.build));
}

// CSS Settings and task
var css = {
    src: dir.src + "scss/style.scss",
    watch: dir.src + "scss/**/*",
    build: dir.build,
    sassOpts: {
        outputStyle: "nested",
        imagePath: images.build,
        precision: 3,
        errLogToConsole: true
    },
    processors: [
        require("postcss-assets")({
            loadPaths: ["images/"],
            basePath: dir.build,
            baseUrl: "./"
        }),
        require("autoprefixer"),
        require("css-mqpacker"),
        require("cssnano")
    ]
};
function cssTask() {
    return gulp.src(css.src)
        .pipe(sass(css.sassOpts))
        .pipe(postcss(css.processors))
        .pipe(gulp.dest(css.build))
        .pipe(browsersync ? browsersync.reload({ stream: true }) : gutil.noop());
}

// Javascript options and task
const js = {
    src: dir.src + "js/**/*",
    build: dir.build + "js/",
    filename: "scripts.js"
}
function jsTask() {
    return gulp.src(js.src)
        .pipe(deporder())
        .pipe(concat(js.filename))
        // .pipe(stripdebug())
        .pipe(uglify())
        .pipe(gulp.dest(js.build))
        .pipe(browsersync ? browsersync.reload({stream: true}) : gutil.noop());
}

// Run all of the tasks
// gulp.task("build", gulp.series("php", "css", "js"));

// Browsersynk settings and task
const syncOpts = {
    proxy: localDevelopmentProxy,
    files: dir.build + "**/*",
    open: false,
    notify: false,
    ghostMode: false,
    ui: {
        port: 8001
    }
};
function browsersyncServe(cb) {
    browsersync.init(syncOpts);
    cb();
}

function browsersyncReload(cb) {
    browsersync.reload();
    cb();
}


// watch functionality
function watchTask () {
    gulp.watch(php.src, gulp.series(phpTask, browsersyncReload));
    gulp.watch([images.src, css.watch, js.src], gulp.series(imagesTask, cssTask, jsTask, browsersyncReload))
}

exports.build = gulp.series(
    imagesTask,
    phpTask,
    cssTask,
    jsTask
)

exports.default = gulp.series(
    imagesTask,
    phpTask,
    cssTask,
    jsTask,
    browsersyncServe,
    gulp.series(watchTask)
    
)


// const localDevelopmentProxy = "localhost/cri-wp"

// const gulp = require("gulp");
// const gutil = require("gulp-util");
// const newer = require("gulp-newer");
// const imagemin = require("gulp-imagemin");
// const sass = require("gulp-sass");
// const postcss = require("gulp-postcss");
// const deporder = require("gulp-deporder");
// const concat = require("gulp-concat");
// const stripdebug = require("gulp-strip-debug");
// const uglify = require("gulp-uglify");
// const browsersync = require('browser-sync').create();
// const babel = require("gulp-babel");


// const paths = {
//     styles: {
//         base: "./src/styles/",
//         src: "./src/styles/main.scss",
//         dest: "./dist/styles/",
//         watch: "./src/styles/**/*.scss",
//     },
//     scripts: {
//         base: "./src/scripts/",
//         src: "./src/scripts/**/*.js",
//         dest: "./dist/scripts/",
//         watch: "./src/scripts/**/*.js",
//     },
// };

